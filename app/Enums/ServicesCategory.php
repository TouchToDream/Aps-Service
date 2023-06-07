<?php

namespace App\Enums;

use MyCLabs\Enum\Enum;

class ServicesCategory extends Enum
{
    private const LaptopRepair = 'Laptop repair';
    private const TVRepair = 'TV repair';
    private const PCRepair = 'PC repair';
    private const PhoneRepair = 'Phone repair';
    private const LaptopDiagnostic = 'Laptop diagnostic';
    private const TVDiagnostic = 'TV diagnostic';
    private const PCDiagnostic = 'PC diagnostic';
    private const PhoneDiagnostic = 'Phone diagnostic';
    private const LaptopMaintenance = 'Laptop maintenance';
    private const TVMaintenance = 'TV maintenance';
    private const PCMaintenance = 'PC maintenance';
    private const PhoneMaintenance = 'Phone maintenance';
}
