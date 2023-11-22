use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
/**
* Seed the application's database.
*/
public function run(): void
{
User::factory(3)->create();

Category::create([
'name' => Str::random(10), // Ubah ini sesuai kebutuhan
'slug' => Str::slug(Str::random(10)) // Menggunakan fungsi Str::slug() untuk membuat slug
]);

Category::create([
'name' => Str::random(10),
'slug' => Str::slug(Str::random(10))
]);

Post::factory(20)->create();

// Jika Anda ingin mengacak nilai dalam Post::create
Post::create([
'title' => Str::random(20),
'slug' => Str::slug(Str::random(20)),
'excerpt' => Str::random(100),
'body' => Str::random(500),
'category_id' => rand(1, 2), // Memilih kategori secara acak
'user_id' => rand(1, 3) // Memilih user secara acak
]);
}
}