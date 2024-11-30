<?php

namespace App\Repositories;

use SOSTheBlack\Repository\Eloquent\BaseRepository;
use SOSTheBlack\Repository\Criteria\RequestCriteria;
use SOSTheBlack\Repository\Exceptions\RepositoryException;
use App\Repositories\Contracts\RaffleRepository;
use App\Models\Raffle;

/**
 * Class RaffleRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class RaffleRepositoryEloquent extends BaseRepository implements RaffleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return Raffle::class;
    }

    /**
     * Boot up the repository, pushing criteria
     *
     * @return void
     */
    public function boot(): void
    {
        try {
            $this->pushCriteria(app(RequestCriteria::class));
        } catch (RepositoryException $repositoryException) {
        }
    }

}
