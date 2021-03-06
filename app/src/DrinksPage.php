<?php

namespace StereoClub\Drinks;

use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\ORM\ArrayList;
use SilverStripe\View\ArrayData;

use Page;

class DrinksPage extends Page
{
    private static $has_many = [
        'Drinks' => Drink::class,
    ];

    private static $owns = [
        'Drinks',
    ];

     public function SortingOptions() 
    {
        $list = ArrayList::create();
        $list->push(ArrayData::create([
            'Title' => 'Date',
            'Link' => $this->Link("/sortedDate"),
        ]));

        $list->push(ArrayData::create([
            'Title' => 'Price',
            'Link' => $this->Link("/sortedPrice")
        ]));
        $list->push(ArrayData::create([
            'Title' => 'Name',
            'Link' => $this->Link("/sortedName")
        ]));
        return $list;
    }

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