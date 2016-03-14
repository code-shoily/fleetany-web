<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ModelRepository;
use App\Entities\Model;

class ModelRepositoryEloquent extends BaseRepository implements ModelRepository
{

    protected $rules = [
        'company_id'      => 'required',
        'model_type_id'   => 'required',
        'name'      => 'min:3|required',
        ];

    public function model()
    {
        return Model::class;
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
    public function results($filters = array())
    {
        $models = $this->scopeQuery(function ($query) use ($filters) {

            $query = $query->select('models.*');
            $query = $query->leftJoin('types', 'models.model_type_id', '=', 'types.id');
            $query = $query->leftJoin('contacts', 'models.vendor_id', '=', 'contacts.id');
            
            if (!empty($filters['model-type'])) {
                $query = $query->where('types.name', 'like', '%'.$filters['model-type'].'%');
            }
            if (!empty($filters['vendor'])) {
                $query = $query->where('contacts.name', 'like', '%'.$filters['vendor'].'%');
            }
            if (!empty($filters['name'])) {
                $query = $query->where('models.name', 'like', '%'.$filters['name'].'%');
            }

            $query = $query->orderBy('models.'.$filters['sort'], $filters['order']);
            
            return $query;
        })->paginate($filters['paginate']);
        
        return $models;
    }
}