<?php
/**
 * @author     DCKAP <extensions@dckap.com>
 * @package    DCKAP_Contactform
 * @copyright  Copyright (c) 2016 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\Contactform\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer->getConnection()
            ->newTable($installer->getTable('dckap_contactform'))
            ->addColumn(
                'cust_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'CUSTOMER ID'
            )
            ->addColumn('name', Table::TYPE_TEXT, 255, ['nullable' => false], 'NAME')
            ->addColumn('email', Table::TYPE_TEXT, 100, ['nullable' => true, 'default' => null], 'EMAIL')
            ->addColumn('contact_number', Table::TYPE_TEXT, 50, ['nullable' => true, 'default' => null], 'CONTACT NUMBER')
            ->addColumn('message', Table::TYPE_TEXT, 255, ['nullable' => false], 'MESSAGE')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->setComment('Dckap Contact Form')
            ->addIndex(
                $installer->getIdxName($installer->getTable('dckap_contactform'), ['cust_id']),
                ['cust_id']
            );


        $installer->getConnection()->createTable($table);


        $installer->endSetup();
    }

}
