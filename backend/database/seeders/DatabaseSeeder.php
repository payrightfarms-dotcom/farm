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
            $user = User::firstOrCreate(
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

    private function seedMenuAndOrders(): void
    {
        if (Category::count() > 0 || MenuItem::count() > 0) {
            return;
        }

        $categories = [
            ['name' => 'Live Chickens', 'description' => 'Healthy, naturally raised live birds', 'sort_order' => 1],
            ['name' => 'Dressed & Processed', 'description' => 'Machine dressed whole chickens, fresh or frozen', 'sort_order' => 2],
            ['name' => 'Chicken Cuts & Parts', 'description' => 'Freshly cut chicken parts packaged to order', 'sort_order' => 3],
        ];

        $categories = collect($categories)->map(fn ($cat) => Category::create($cat));

        $menuItems = [
            [
                'category' => 'Live Chickens',
                'name' => 'Live Broiler (Large)',
                'description' => 'Average weight 2.5kg - 3kg. Perfect for home or commercial processing.',
                'price' => 4500,
                'image_url' => '',
                'stock' => 150,
                'stock_unit' => 'birds',
                'sort_order' => 1,
            ],
            [
                'category' => 'Live Chickens',
                'name' => 'Live Layer (Parent Stock)',
                'description' => 'Productive parent stock layers. Strong and healthy.',
                'price' => 3500,
                'image_url' => '',
                'stock' => 200,
                'stock_unit' => 'birds',
                'sort_order' => 2,
            ],
            [
                'category' => 'Dressed & Processed',
                'name' => 'Fresh Dressed Whole Chicken',
                'description' => 'Cleaned and eviscerated whole broiler, processed in our Slaughter House.',
                'price' => 5500,
                'image_url' => '',
                'stock' => 80,
                'stock_unit' => 'birds',
                'sort_order' => 3,
            ],
            [
                'category' => 'Dressed & Processed',
                'name' => 'Frozen Dressed Whole Chicken',
                'description' => 'Blast frozen whole dressed broiler, vacuum sealed for preservation.',
                'price' => 5700,
                'image_url' => '',
                'stock' => 100,
                'stock_unit' => 'birds',
                'sort_order' => 4,
            ],
            [
                'category' => 'Chicken Cuts & Parts',
                'name' => 'Chicken Wings (1kg Pack)',
                'description' => 'Freshly cut and packaged broiler wings. Premium quality.',
                'price' => 2800,
                'image_url' => '',
                'stock' => 50,
                'stock_unit' => 'packs',
                'sort_order' => 5,
            ],
            [
                'category' => 'Chicken Cuts & Parts',
                'name' => 'Chicken Drumsticks (1kg Pack)',
                'description' => 'Freshly cut juicy drumsticks, packaged and chilled.',
                'price' => 3200,
                'image_url' => '',
                'stock' => 60,
                'stock_unit' => 'packs',
                'sort_order' => 6,
            ],
        ];

        $menuItems = collect($menuItems)->map(function ($item) use ($categories) {
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

        $order = Order::create([
            'code' => Str::upper(Str::random(8)),
            'status' => 'paid',
            'channel' => 'pos',
            'customer_name' => 'Walk-in Customer',
            'subtotal' => 5500,
            'tax' => 0,
            'discount' => 0,
            'total' => 5500,
            'paid_at' => now(),
        ]);

        OrderItem::create([
            'order_id' => $order->id,
            'menu_item_id' => $menuItems[2]->id ?? null,
            'name' => 'Fresh Dressed Whole Chicken',
            'quantity' => 1,
            'unit_price' => 5500,
            'total' => 5500,
        ]);

        Payment::create([
            'order_id' => $order->id,
            'amount' => 5500,
            'method' => 'cash',
            'paid_at' => now(),
        ]);
    }
}
