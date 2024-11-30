<?php

namespace Database\Seeders;

use App\Repositories\Contracts\RaffleCategoryRepository;
use Illuminate\Database\Seeder;

class RaffleCategorySeeder extends Seeder
{
    /**
     * Default categories.
     *
     * @const array
     */
    private const array CATEGORIES = [
        'Carro',
        'Moto',
        'Eletrônico',
        'Esporte',
        'Infantil',
        'Serviço',
        'Imóveis',
        'Móveis',
        'Beneficente',
        'Agro',
        'Outros',
    ];

    public function __construct(private readonly RaffleCategoryRepository $raffleCategoryRepository) {}

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::CATEGORIES as $category) {
            $this->raffleCategoryRepository->create([
                'name' => $category,
                'slug' => str($category)->slug(),
            ]);
        }
    }
}
