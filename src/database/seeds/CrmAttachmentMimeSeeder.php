<?php

use Illuminate\Database\Seeder;
use Syscover\Pulsar\Models\AttachmentMime;

class CrmAttachmentMimeSeeder extends Seeder
{
    public function run()
    {
        AttachmentMime::insert([
            ['resource_id_019' => 'crm-customer', 'mime_019' => 'image/jpeg'],
            ['resource_id_019' => 'crm-customer', 'mime_019' => 'image/png'],
            ['resource_id_019' => 'crm-customer', 'mime_019' => 'text/plain'],
            ['resource_id_019' => 'crm-customer', 'mime_019' => 'application/pdf'],
            ['resource_id_019' => 'crm-customer', 'mime_019' => 'application/msword'],
            ['resource_id_019' => 'crm-customer', 'mime_019' => 'application/msexcel'],
            ['resource_id_019' => 'crm-customer', 'mime_019' => 'application/zip'],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="CrmAttachmentMimeSeeder"
 */