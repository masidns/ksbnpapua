<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdergalleryModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ordergallery';
    protected $primaryKey       = 'idordergallery';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'newsevents_id'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getorder($slug = false)
    {
        # code...
        if ($slug == false) {
            return $this->db->table('ordergallery')
                ->join('newsevents', 'newsevents.newsevents_id = ordergallery.newsevents_id')
                ->join('gallery', 'gallery.id = ordergallery.idordergallery')
                ->get()->getResult();
        }
    }
}
