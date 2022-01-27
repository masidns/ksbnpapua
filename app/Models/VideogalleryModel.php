<?php

namespace App\Models;

use CodeIgniter\Model;

class VideogalleryModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'videogallery';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'video',
        'idordergallery',
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

    public function getVideo($id = false)
    {
        # code...
        if ($id == false) {
            return $this->db->table('videogallery')
                // ->select('ordergallery.*,videogallery.video')
                ->orderBy('id', 'DESC')
                ->join('ordergallery', 'ordergallery.idordergallery = videogallery.idordergallery')
                ->get()->getResult();
        }
        return $this->db->table('videogallery')
            ->join('ordergallery', 'ordergallery.idordergallery = videogallery.idordergallery')
            ->get()->getRowObject();
    }
    public function getVideotags($id = false)
    {
        # code...
        if ($id == false) {
            return $this->db->table('videogallery')
                // ->select('ordergallery.*,videogallery.video')
                ->orderBy('id', 'DESC')
                ->join('ordergallery', 'ordergallery.idordergallery = videogallery.idordergallery')
                ->get(4, 0)->getResult();
        }
        return $this->db->table('videogallery')
            ->join('ordergallery', 'ordergallery.idordergallery = videogallery.idordergallery')
            ->get()->getRowObject();
    }
}
