<?php

namespace StereoClub\Drinks;

use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use Page;

class DrinksPage extends Page
{
    private static $has_many = [
        'Drinks' => Drink::class,
    ];

    private static $owns = [
        'Drinks',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Drinks', GridField::create(
            'Drinks',
            'Drinks on this page',
            $this->Drinks(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }

}