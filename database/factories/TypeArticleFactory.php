<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

class TypeArticleFactory extends Factory
{
    protected $model = TypeArticle::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => array_rand(['Imobilier','Telephone','Salle','Voiture'])
        ];
    }
}
