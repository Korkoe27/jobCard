<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deviceInfo extends Model
{
    use HasFactory;

    protected $table = 'device_info';

    protected $fillable = [
        'job_card_number',
        // 'job_card_date',
        'equipment_model',
        'serial_number',
        'dvd_cd_rom',
        'memory_type',
        'memory_size',
        'hdd_type',
        'hdd_size',
        'printer_model',
        'catridge_present',
        'catridge_type',
        'complainant_service_number',
        'complainant_rank',
        'complainant_name',
        'complaint',
        'complainant_unit',
        'complainant_contact'
    ];


}
