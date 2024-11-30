<?php

namespace App\Repositories;

use App\Models\RaffleCategory;
use App\Repositories\Contracts\RaffleCategoryRepository;
use Illuminate\Support\Facades\Log;
use SOSTheBlack\Repository\Criteria\RequestCriteria;
use SOSTheBlack\Repository\Eloquent\BaseRepository;
use SOSTheBlack\Repository\Exceptions\RepositoryException;

/**
 * Class RaffleCategoryRepositoryEloquent.
 */
class RaffleCategoryRepositoryEloquent extends BaseRepository implements RaffleCategoryRepository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return RaffleCategory::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot(): void
    {
        try {
            $this->pushCriteria(app(RequestCriteria::class));
        } catch (RepositoryException $repositoryException) {
            Log::error($repositoryException->getMessage(), $repositoryException->getTrace());
        }
    }
}
