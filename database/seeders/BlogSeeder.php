<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Category;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catNutrition = Category::where('slug', 'pet-nutrition')->first();
        $catCare = Category::where('slug', 'pet-care-tips')->first();
        $catVet = Category::where('slug', 'vet-advice')->first();

        $blogs = [
            [
                'category_id'       => $catNutrition ? $catNutrition->id : null,
                'title'             => 'Best Diet Plans for Dogs and Cats for a Healthy Life',
                'slug'              => 'best-diet-plans-for-dogs-and-cats-for-a-healthy-life',
                'image'             => 'post-1.jpg',
                'short_description' => 'Discover the optimal dietary plans and nutritional guidelines to ensure your dogs and cats thrive at every life stage.',
                'content'           => '<h2>Fueling Your Pets with the Right Nutrition</h2><p>Proper nutrition is the cornerstone of lifelong vitality for both dogs and cats. Just like humans, pets require balanced amounts of proteins, healthy fats, vitamins, and minerals tailored to their breed, age, and activity levels.</p><h3>Key Dietary Considerations:</h3><ul><li><strong>High-Quality Protein:</strong> Look for real meat as the primary ingredient to support lean muscle development.</li><li><strong>Hydration Matters:</strong> Cats in particular have a low thirst drive; incorporating wet food can prevent urinary complications.</li><li><strong>Portion Control:</strong> Overfeeding leads to obesity, which puts unnecessary stress on joints and internal organs.</li></ul><p>Always consult with your veterinarian or certified pet nutritionist before making drastic changes to your pet\'s daily feeding regimen.</p>',
                'author'            => 'Cloudytailz Nutrition Team',
                'status'            => true,
                'meta_title'        => 'Best Diet Plans for Dogs and Cats | Cloudytailz Nutrition',
                'meta_description'  => 'Discover expert-recommended diet plans, essential nutrients, and feeding tips to keep your pets healthy and active.',
                'meta_keywords'     => 'pet diet, dog nutrition, cat food, pet healthy diet, dog feeding guide',
                'canonical_url'     => null,
            ],
            [
                'category_id'       => $catCare ? $catCare->id : null,
                'title'             => 'Daily Care Tips to Keep Your Dogs and Cats Happy at Home',
                'slug'              => 'daily-care-tips-to-keep-your-dogs-and-cats-happy-at-home',
                'image'             => 'post-2.jpg',
                'short_description' => 'Simple everyday grooming routines, mental stimulation tricks, and environmental enrichment to keep pets joyful.',
                'content'           => '<h2>Creating a Nurturing Environment at Home</h2><p>A happy pet is a healthy pet! Beyond daily walks and feeding routines, companion animals need mental enrichment and affection to feel safe and fulfilled in their home environment.</p><h3>Everyday Wellness Habits:</h3><ul><li><strong>Daily Brushing:</strong> Spending 5–10 minutes brushing eliminates loose fur, prevents matting, and distributes natural coat oils.</li><li><strong>Interactive Play:</strong> Puzzle toys and wand toys stimulate cognitive skills and relieve boredom.</li><li><strong>Safe Resting Spaces:</strong> Ensure your pet has dedicated, cozy retreats away from noise and foot traffic.</li></ul><p>Consistency in routine reduces anxiety and helps build an unbreakable bond between you and your beloved furry companions.</p>',
                'author'            => 'Cloudytailz Care Specialists',
                'status'            => true,
                'meta_title'        => 'Daily Care Tips for Happy Dogs & Cats | Cloudytailz',
                'meta_description'  => 'Learn actionable daily pet care advice, grooming habits, and mental enrichment tips for your pets at home.',
                'meta_keywords'     => 'pet care tips, happy dog, cat wellbeing, home pet grooming, pet routines',
                'canonical_url'     => null,
            ],
            [
                'category_id'       => $catVet ? $catVet->id : null,
                'title'             => 'When to Visit a Vet: Warning Signs in Dogs and Cats',
                'slug'              => 'when-to-visit-a-vet-warning-signs-in-dogs-and-cats',
                'image'             => 'post-3.jpg',
                'short_description' => 'Learn the subtle early warning signs of illness in dogs and cats and know when you should schedule an urgent vet visit.',
                'content'           => '<h2>Recognizing the Subtle Symptoms of Illness</h2><p>Pets are notorious for hiding pain and discomfort until an illness has progressed. Being vigilant about behavioral and physical shifts can literally save your companion\'s life.</p><h3>Red Flags That Warrant a Vet Consultation:</h3><ul><li><strong>Loss of Appetite:</strong> Refusing food for more than 24 hours (or 12 hours for kittens/puppies) is an immediate concern.</li><li><strong>Unusual Lethargy:</strong> Disinterest in favorite toys, unwillingness to move, or persistent sleeping.</li><li><strong>Changes in Litter Box Habits:</strong> Straining, frequent attempts, or crying while urinating requires rapid medical evaluation.</li><li><strong>Vomiting or Diarrhea:</strong> Especially if repeated or accompanied by fever and weakness.</li></ul><p>Never hesitate to reach out for a home vet visit or teleconsultation when your intuition says something is off.</p>',
                'author'            => 'Dr. Cloudytailz Veterinary Team',
                'status'            => true,
                'meta_title'        => 'When to Visit a Vet: Pet Warning Signs | Cloudytailz Vet Clinic',
                'meta_description'  => 'Recognize early warning signs and symptoms in dogs and cats to know when an urgent vet visit or consultation is needed.',
                'meta_keywords'     => 'pet health warning signs, vet visit dog, cat illness symptoms, pet clinic emergency',
                'canonical_url'     => null,
            ],
        ];

        foreach ($blogs as $data) {
            Blog::firstOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
