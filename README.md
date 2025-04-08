# Joomla Workflow Enhancer

## Features
- Dashboard widget showing pending articles
- Email notifications for workflow changes
- Customizable email templates

## Installation
1. Download the latest release
2. Install via **Extensions → Manage → Install**
3. Configure email templates in module parameters

## Development
```bash
git commit -m "feat: Add email notification logic"  
git commit -m "test: Add PHPUnit tests for pending articles"

composer exec phpcs modules/mod_workflow_enhancer --standard=Joomla  

composer install
composer test
