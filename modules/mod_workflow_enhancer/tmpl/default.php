<?php
defined('_JEXEC') or die;

JHtml::_('stylesheet', 'mod_workflow_enhancer/styles.css', ['version' => 'auto']);
?>
<div class="workflow-enhancer<?php echo $moduleclass_sfx; ?>">
    <h3><?php echo JText::_('MOD_WORKFLOW_ENHANCER_PENDING_ARTICLES'); ?></h3>
    
    <ul class="pending-articles">
        <?php foreach ($pending_articles as $article) : ?>
            <li>
                <?php echo JHtml::_('link', 'index.php?option=com_content&task=article.edit&id=' . $article->id, $article->title); ?>
                <span class="badge badge-warning">Pending</span>
            </li>
        <?php endforeach; ?>
    </ul>
</div>