<?php
defined('_JEXEC') or die;

class ModWorkflowEnhancerHelper {
    public static function getPendingArticles() {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true)
            ->select($db->quoteName(['id', 'title', 'created_by']))
            ->from($db->quoteName('#__content'))
            ->where($db->quoteName('state') . ' = 0')
            ->order('created DESC');
            
        $db->setQuery($query);
        return $db->loadObjectList();
    }

    public static function sendEmailNotification($articleId, $newStage) {
        $app = JFactory::getApplication();
        $user = JFactory::getUser();
        $mailer = JFactory::getMailer();
        
        $mailer->setSubject(JText::sprintf('MOD_WORKFLOW_ENHANCER_EMAIL_SUBJECT', $articleId));
        $mailer->setBody(JText::sprintf('MOD_WORKFLOW_ENHANCER_EMAIL_BODY', $user->name, $newStage));
        $mailer->addRecipient($app->get('mailfrom'));
        
        return $mailer->Send();
    }
}