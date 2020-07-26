<?php

namespace StereoClub\Drinks;

use SilverStripe\Forms\DateField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\DatetimeField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\CurrencyField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\ORM\ArrayLib;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TabSet;
use SilverStripe\Versioned\Versioned;

class Drink extends DataObject
{

    private static $db = [
        'Title' => 'Varchar',
        'Price' => 'Currency',
        'Description' => 'Text',
        'Ingredients' => 'Text',
        'Date' => 'Datetime',
    ];


    private static $has_one = [
        'PrimaryPhoto' => Image::class,
        'DrinksPage' => DrinksPage::class,
    ];

    private static $summary_fields = [
        'Title' => 'Title',
        'Description' => 'Description',
        'Price.Nice' => 'Price',
        'Ingredients' => 'Ingredients'
    ];

    private static $owns = [
        'PrimaryPhoto',
    ];

    private static $extensions = [
        Versioned::class,
    ];

    private static $versioned_gridfield_extensions = true;

    public function getCMSfields()
    {
        $fields = FieldList::create(TabSet::create('Root'));
        $fields->addFieldToTab('Root.Main', DatetimeField::create('Date','Date of creation'), 'Content');
        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title'),
            TextareaField::create('Description'),
            CurrencyField::create('Price'),
            TextareaField::create('Ingredients'),
        ]);
        $fields->addFieldToTab('Root.Photos', $upload = UploadField::create(
            'PrimaryPhoto',
            'Primary photo'
        ));

        $upload->getValidator()->setAllowedExtensions(array(
            'png','jpeg','jpg','gif'
        ));
        $upload->setFolderName('drink-photos');

        return $fields;
    }
}