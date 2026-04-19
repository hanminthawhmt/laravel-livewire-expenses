<?php
namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Income Categories
            ['name' => 'Salary', 'type' => 'income', 'color' => '#10b981', 'icon' => '💰'],
            ['name' => 'Freelance', 'type' => 'income', 'color' => '#10b981', 'icon' => '💻'],
            ['name' => 'Investment', 'type' => 'income', 'color' => '#10b981', 'icon' => '📈'],
            ['name' => 'Gift', 'type' => 'income', 'color' => '#10b981', 'icon' => '🎁'],
            ['name' => 'Other Income', 'type' => 'income', 'color' => '#10b981', 'icon' => '💵'],

            // Expense Categories
            ['name' => 'Food & Dining', 'type' => 'expense', 'color' => '#ef4444', 'icon' => '🍔'],
            ['name' => 'Transportation', 'type' => 'expense', 'color' => '#ef4444', 'icon' => '🚕'],
            ['name' => 'Rent', 'type' => 'expense', 'color' => '#ef4444', 'icon' => '🏠'],
            ['name' => 'Utilities', 'type' => 'expense', 'color' => '#ef4444', 'icon' => '💡'],
            ['name' => 'Groceries', 'type' => 'expense', 'color' => '#ef4444', 'icon' => '🛒'],
            ['name' => 'Entertainment', 'type' => 'expense', 'color' => '#ef4444', 'icon' => '🎬'],
            ['name' => 'Shopping', 'type' => 'expense', 'color' => '#ef4444', 'icon' => '🛍️'],
            ['name' => 'Health & Medical', 'type' => 'expense', 'color' => '#ef4444', 'icon' => '🏥'],
            ['name' => 'Education', 'type' => 'expense', 'color' => '#ef4444', 'icon' => '📚'],
            ['name' => 'Travel', 'type' => 'expense', 'color' => '#ef4444', 'icon' => '✈️'],
            ['name' => 'Other Expense', 'type' => 'expense', 'color' => '#ef4444', 'icon' => '📦'],
        ];

        foreach ($categories as $cat) {
            Category::create([
                'name'       => $cat['name'],
                'type'       => $cat['type'],
                'color'      => $cat['color'],
                'icon'       => $cat['icon'],
                'is_default' => true,
                'user_id'    => null,
            ]);
        }
    }
}
