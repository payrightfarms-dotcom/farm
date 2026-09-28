<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\MenuItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedUsers();
        $this->seedMenuAndOrders();
    }

    private function seedUsers(): void
    {
        $roles = ['admin', 'slaughter_house', 'staff', 'desk', 'pos'];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        $users = [
            ['name' => 'Admin', 'email' => 'admin@payrightfarms.com', 'password' => 'Diode4me123@', 'role' => 'admin'],
            ['name' => 'Slaughter House', 'email' => 'slaughter_house@example.com', 'password' => 'password', 'role' => 'slaughter_house'],
            ['name' => 'Staff', 'email' => 'staff@example.com', 'password' => 'password', 'role' => 'staff'],
            ['name' => 'Desk', 'email' => 'desk@example.com', 'password' => 'password', 'role' => 'desk'],
            ['name' => 'POS', 'email' => 'pos@example.com', 'password' => 'password', 'role' => 'pos'],
        ];

        foreach ($users as $data) {
            $user = User::updateOrCreate(
                ['email' => $data['email']],
                [
                    'name' => $data['name'],
                    'password' => bcrypt($data['password']),
                    'is_active' => true,
                    'role' => $data['role'],
                    'approved_by' => 1,
                ]
            );
            $user->syncRoles($data['role']);
        }
    }

    public function seedMenuAndOrders(): void
    {
        // Delete existing items and categories to ensure fresh clean list
        OrderItem::query()->delete();
        Order::query()->delete();
        MenuItem::query()->delete();
        Category::query()->delete();

        $categoriesData = [
            [
                'name' => 'Eggs',
                'description' => 'Fresh farm-raised poultry eggs',
                'sort_order' => 1,
            ],
            [
                'name' => 'Breedwell Feeds',
                'description' => 'High quality Breedwell poultry feeds',
                'sort_order' => 2,
            ],
            [
                'name' => 'Olam Feeds',
                'description' => 'Premium Olam Ultima feed formulations',
                'sort_order' => 3,
            ],
            [
                'name' => 'Chikun Feeds',
                'description' => 'Chikun brand poultry feeds',
                'sort_order' => 4,
            ],
            [
                'name' => 'Chicken & Cuts',
                'description' => 'Dressed whole chicken, quarters, and processed chicken parts',
                'sort_order' => 5,
            ],
        ];

        $categories = collect($categoriesData)->map(fn ($cat) => Category::create($cat));

        $menuItemsData = [
            // Eggs
            [
                'category' => 'Eggs',
                'name' => 'Crates of Egg',
                'description' => 'Fresh farm-raised eggs packaged in standard 30-egg crates.',
                'price' => 4200,
                'image_url' => 'https://www.takibfarms.com/products/imgdynamic/chicken-eggsr-30.jpg',
                'stock' => 100,
                'stock_unit' => 'crates',
                'sort_order' => 1,
            ],

            // Breedwell Feeds
            [
                'category' => 'Breedwell Feeds',
                'name' => 'Breedwell Professional Starter',
                'description' => 'High-protein starter feed formula for young chicks.',
                'price' => 14500,
                'image_url' => 'https://breedwell.com.ng/assets/images/product/broiler%20starter.jpg',
                'stock' => 50,
                'stock_unit' => 'bags',
                'sort_order' => 2,
            ],
            [
                'category' => 'Breedwell Feeds',
                'name' => 'Breedwell Professional Grower',
                'description' => 'Balanced grower feed for healthy poultry development.',
                'price' => 13800,
                'image_url' => 'https://www.breedwell.com.ng/assets/images/product/PRO%202.jpg',
                'stock' => 50,
                'stock_unit' => 'bags',
                'sort_order' => 3,
            ],
            [
                'category' => 'Breedwell Feeds',
                'name' => 'Breedwell Professional Finisher',
                'description' => 'Finisher feed blend engineered for optimal weight gain.',
                'price' => 14200,
                'image_url' => 'https://www.breedwell.com.ng/assets/images/product/PRO%203.jpg',
                'stock' => 50,
                'stock_unit' => 'bags',
                'sort_order' => 4,
            ],

            // Olam Feeds
            [
                'category' => 'Olam Feeds',
                'name' => 'Ultima Starter',
                'description' => 'High-nutrition starter feed for growing poultry.',
                'price' => 15000,
                'image_url' => 'https://naijamart.com/storage/afc465f2-a65f-4849-841c-df8931892d37/products/ultima-poultry-feed/4UEP3MyoBnqfFC6NIzqNaHZP9MlZmwxAbkQvWqQ7.jpg',
                'stock' => 50,
                'stock_unit' => 'bags',
                'sort_order' => 5,
            ],
            [
                'category' => 'Olam Feeds',
                'name' => 'Ultima Super Starter',
                'description' => 'Premium super starter formulation for early chick vitality.',
                'price' => 15800,
                'image_url' => 'https://res.cloudinary.com/kusnap/image/upload/v1723361553/mobile_test/mxez8qfdyvdr5bgb6lup.jpg',
                'stock' => 50,
                'stock_unit' => 'bags',
                'sort_order' => 6,
            ],
            [
                'category' => 'Olam Feeds',
                'name' => 'Ultima Finisher',
                'description' => 'High-energy finisher feed for high yield broilers.',
                'price' => 14800,
                'image_url' => 'https://htsfarms.ng/wp-content/uploads/2024/07/Ultima-finisher-Pellet.jpg',
                'stock' => 50,
                'stock_unit' => 'bags',
                'sort_order' => 7,
            ],
            [
                'category' => 'Olam Feeds',
                'name' => 'Ultima Starter Plus',
                'description' => 'Enriched starter feed blend with additional amino acids.',
                'price' => 15500,
                'image_url' => 'https://res.cloudinary.com/kusnap/image/upload/v1677180663/pu0qunjnab7vznlctyvx.jpg',
                'stock' => 50,
                'stock_unit' => 'bags',
                'sort_order' => 8,
            ],
            [
                'category' => 'Olam Feeds',
                'name' => 'Ultima Super Starter Plus',
                'description' => 'Advanced super starter feed blend for maximum chick development.',
                'price' => 16200,
                'image_url' => 'https://res.cloudinary.com/kusnap/image/upload/v1714999884/pblpwc2xjrwvmlfcw0fx.jpg',
                'stock' => 50,
                'stock_unit' => 'bags',
                'sort_order' => 9,
            ],
            [
                'category' => 'Olam Feeds',
                'name' => 'Ultima Finisher Plus',
                'description' => 'Premium finisher feed blend for top market weight.',
                'price' => 15200,
                'image_url' => 'https://htsfarms.ng/wp-content/uploads/2024/07/Ultima-finisher-Pellet.jpg',
                'stock' => 50,
                'stock_unit' => 'bags',
                'sort_order' => 10,
            ],

            // Chikun Feeds
            [
                'category' => 'Chikun Feeds',
                'name' => 'Chikun Layer Crumble',
                'description' => 'Specially formulated layer crumble for optimal egg laying.',
                'price' => 14000,
                'image_url' => 'https://naijamart.com/storage/d338d049-4bb2-49f6-8a56-2efd83e0bae8/products/chikun-super-starter-pellet/PsTPaeVH8GMt6N6aFp3zt3pQUOa6nlT2xpBD1ehP.jpg',
                'stock' => 50,
                'stock_unit' => 'bags',
                'sort_order' => 11,
            ],
            [
                'category' => 'Chikun Feeds',
                'name' => 'Chikun Finisher',
                'description' => 'Quality finisher feed for commercial broilers.',
                'price' => 13900,
                'image_url' => 'https://agrohub.ng/imgs/board/25/1525-1.jpg',
                'stock' => 50,
                'stock_unit' => 'bags',
                'sort_order' => 12,
            ],

            // Chicken & Cuts
            [
                'category' => 'Chicken & Cuts',
                'name' => 'Whole Chicken',
                'description' => 'Cleaned and eviscerated whole broiler, machine processed.',
                'price' => 5500,
                'image_url' => 'https://guibon.com.br/wp-content/uploads/2015/09/Frango-com-mi%C3%BAdos-1000x512.jpg',
                'stock' => 100,
                'stock_unit' => 'birds',
                'sort_order' => 13,
            ],
            [
                'category' => 'Chicken & Cuts',
                'name' => 'Cut 4 Chicken',
                'description' => 'Cleaned dressed whole chicken neatly quartered into 4 portions.',
                'price' => 5700,
                'image_url' => 'https://img500.exportersindia.com/product_images/bc-500/dir_119/3540371/frozen-chicken-cut-wings-80-100-g-origin-brazil-1909262.jpg',
                'stock' => 80,
                'stock_unit' => 'birds',
                'sort_order' => 14,
            ],
            [
                'category' => 'Chicken & Cuts',
                'name' => 'Laps (Leg Quarters)',
                'description' => 'Fresh chicken leg quarters (thighs and drumsticks).',
                'price' => 3500,
                'image_url' => 'https://guibon.com.br/wp-content/uploads/2015/09/Frango-com-mi%C3%BAdos-1000x512.jpg',
                'stock' => 60,
                'stock_unit' => 'kg',
                'sort_order' => 15,
            ],
            [
                'category' => 'Chicken & Cuts',
                'name' => 'Gizzard',
                'description' => 'Cleaned and hygienically prepped fresh chicken gizzards.',
                'price' => 3000,
                'image_url' => 'https://guibon.com.br/wp-content/uploads/2015/09/Frango-com-mi%C3%BAdos-1000x512.jpg',
                'stock' => 40,
                'stock_unit' => 'kg',
                'sort_order' => 16,
            ],
            [
                'category' => 'Chicken & Cuts',
                'name' => 'Head',
                'description' => 'Cleaned chicken heads for culinary preparations and broths.',
                'price' => 1200,
                'image_url' => 'https://images.rappi.com/products/fa0ff587-aa5b-46ef-820f-736271680ceb.png',
                'stock' => 30,
                'stock_unit' => 'kg',
                'sort_order' => 17,
            ],
            [
                'category' => 'Chicken & Cuts',
                'name' => 'Feet',
                'description' => 'Hygienically cleaned and processed chicken feet.',
                'price' => 1500,
                'image_url' => 'https://images.rappi.com/products/fa0ff587-aa5b-46ef-820f-736271680ceb.png',
                'stock' => 40,
                'stock_unit' => 'kg',
                'sort_order' => 18,
            ],
            [
                'category' => 'Chicken & Cuts',
                'name' => 'Heart',
                'description' => 'Freshly processed chicken hearts.',
                'price' => 2500,
                'image_url' => 'https://guibon.com.br/wp-content/uploads/2015/09/Frango-com-mi%C3%BAdos-1000x512.jpg',
                'stock' => 25,
                'stock_unit' => 'kg',
                'sort_order' => 19,
            ],
            [
                'category' => 'Chicken & Cuts',
                'name' => 'Neck',
                'description' => 'Cleaned and prepped chicken necks.',
                'price' => 1800,
                'image_url' => 'https://images.rappi.com/products/fa0ff587-aa5b-46ef-820f-736271680ceb.png',
                'stock' => 35,
                'stock_unit' => 'kg',
                'sort_order' => 20,
            ],
        ];

        $menuItems = collect($menuItemsData)->map(function ($item) use ($categories) {
            $category = $categories->firstWhere('name', $item['category']);

            return MenuItem::create([
                'category_id' => $category?->id,
                'name' => $item['name'],
                'slug' => Str::slug($item['name'] . '-' . Str::random(6)),
                'description' => $item['description'],
                'price' => $item['price'],
                'image_url' => $item['image_url'],
                'stock' => $item['stock'] ?? null,
                'stock_unit' => $item['stock_unit'] ?? null,
                'sort_order' => $item['sort_order'],
            ]);
        });
    }
}
