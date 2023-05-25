<?php

namespace App\Enums;

use MyCLabs\Enum\Enum;

class OrderStatus extends Enum
{
    private const NEW = 'Новый';
    private const IN_PROCESS = 'Принят в обработку';
    private const WAITING_FOR_PARTS = 'Ожидает запчасти для ремонта';
    private const COMPLETED = 'Завершен';
    private const READY_FOR_PICKUP = 'Готов к выдаче';
    private const CANCELED_BY_CLIENT = 'Отменен (отказ клиента)';
    private const CANCELED_MISSING_PARTS = 'Отменен (отсутствуют запчасти)';
}