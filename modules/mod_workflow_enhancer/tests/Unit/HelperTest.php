<?php
use PHPUnit\Framework\TestCase;
use Joomla\Module\WorkflowEnhancer\Site\Helper\ModWorkflowEnhancerHelper;

class ModWorkflowEnhancerHelperTest extends TestCase {
    protected function setUp(): void {
        JFactory::$database = $this->createMock(JDatabaseDriver::class);
    }

    public function testGetPendingArticles() {
        $mockData = [(object)['id' => 1, 'title' => 'Test Article']];
        
        JFactory::$database->expects($this->once())
            ->method('loadObjectList')
            ->willReturn($mockData);
            
        $result = ModWorkflowEnhancerHelper::getPendingArticles();
        $this->assertCount(1, $result);
    }

    public function testSendEmailNotification() {
        $mailerMock = $this->createMock(JMail::class);
        $mailerMock->method('Send')->willReturn(true);
        
        JFactory::$mailer = $mailerMock;
        
        $this->assertTrue(ModWorkflowEnhancerHelper::sendEmailNotification(1, 'Published'));
    }
}