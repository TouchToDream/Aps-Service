<?php

namespace App\Enums;

use MyCLabs\Enum\Enum;

class OrderCategory extends Enum
{
    private const COMPUTER_REPAIR = 'ремонт компьютера';
    private const PHONE_REPAIR = 'ремонт телефона';
    private const LAPTOP_REPAIR = 'ремонт ноутбука';
    private const TV_REPAIR = 'ремонт телевизора';
    private const COMPONENTS_REPAIR = 'ремонт комплектующих';
    private const COMPONENTS_PURCHASE = 'покупка комплектующих';
}