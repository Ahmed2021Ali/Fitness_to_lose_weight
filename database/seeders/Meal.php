<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Meal extends Seeder
{

    public function run(): void
    {
        DB::table('meals')->delete();
        $meals = [
            [

                'day' => 'Saturday',
                'fasting_status' => 'Breacking Fast',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => 'Scrambled eggs with spinach and whole grain toast',
                'breakfast_time' => '8:00 AM',
                'lunch_meal' => 'Grilled chicken salad with mixed greens, veggies, and balsamic vinaigrette',
                'lunch_time' => '12:30 PM',
                'dinner_meal' => 'Baked salmon with quinoa and steamed broccoli',
                'dinner_time' => '6:30 PM',
                'plan_id'=> 1  // plan_id
            ],  //1

            [
                'day' => 'Sunday',
                'fasting_status' => 'Fasting 24 hour',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => '',
                'lunch_time' => '',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id'=> 1  // plan_id
            ],  //2
            [
                'day' => 'Monday',
                'fasting_status' => 'Breaking Fast',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => 'Greek yogurt parfait with berries and granola',
                'breakfast_time' => '8:00 AM',
                'lunch_meal' => 'Turkey and avocado wrap with whole grain tortilla',
                'lunch_time' => '12:30 PM',
                'dinner_meal' => 'Stir-fried tofu with mixed vegetables and brown rice',
                'dinner_time' => '6:30 PM',
                'plan_id'=> 1  // plan_id
            ],  //3
            [
                'day' => 'Tuesday',
                'fasting_status' => 'Fasting 24 hour',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => '',
                'lunch_time' => '',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id'=> 1  // plan_id
            ],  //4
            [
                'day' => 'Wednesday',
                'fasting_status' => 'Breaking Fast',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => 'Oatmeal topped with sliced bananas and almonds',
                'breakfast_time' => '8:00 AM',
                'lunch_meal' => 'Lentil soup with a side of whole grain bread',
                'lunch_time' => '12:30 PM',
                'dinner_meal' => 'Grilled shrimp with roasted sweet potatoes and asparagus',
                'dinner_time' => '6:30 PM',
                'plan_id'=> 1  // plan_id
            ], //5
            [
                'day' => 'Thursday',
                'fasting_status' => 'Fasting 24 hour',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => '',
                'lunch_time' => '',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id'=> 1  // plan_id
            ], //6
            [
                'day' => 'Friday',
                'fasting_status' => 'Breaking Fast',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => 'Whole grain pancakes with berries and a drizzle of honey',
                'breakfast_time' => '8:00 AM',
                'lunch_meal' => 'Quinoa salad with chickpeas, cucumber, tomatoes, and feta cheese',
                'lunch_time' => '12:30 PM',
                'dinner_meal' => 'Grilled chicken breast with roasted vegetables and couscous',
                'dinner_time' => '6:30 PM',
                'plan_id'=> 1  // plan_id
            ], //7
            [
                'day' => 'Saturday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Grilled chicken salad',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Greek yogurt parfait',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Baked salmon with quinoa and broccoli',
                'dinner_time' => '6:00 PM',
                'plan_id' => 2
            ], //8
            [
                'day' => 'Sunday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Grilled chicken wrap',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Mixed nuts and fruit',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Turkey chili with whole grain bread',
                'dinner_time' => '6:00 PM',
                'plan_id' => 2
            ],//9
            [
                'day' => 'Monday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Quinoa and vegetable stir-fry',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Cottage cheese with sliced peaches',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Grilled tofu with brown rice and steamed vegetables',
                'dinner_time' => '6:00 PM',
                'plan_id' => 2
            ],//10
            [
                'day' => 'Tuesday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Spinach and feta omelette',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Hummus with carrot sticks',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Grilled shrimp with quinoa salad',
                'dinner_time' => '6:00 PM',
                'plan_id' => 2
            ],//11
            [
                'day' => 'Wednesday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Avocado toast with poached eggs',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Apple slices with almond butter',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Teriyaki chicken with roasted sweet potatoes and green beans',
                'dinner_time' => '6:00 PM',
                'plan_id' => 2
            ],//12
            [
                'day' => 'Thursday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Whole grain pasta with marinara sauce and vegetables',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Greek yogurt with honey and walnuts',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Grilled steak with roasted potatoes and asparagus',
                'dinner_time' => '6:00 PM',
                'plan_id' => 2
            ],//13
            [
                'day' => 'Friday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Veggie omelette with whole grain toast',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Sliced cucumber with hummus',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Baked chicken with quinoa and sautéed spinach',
                'dinner_time' => '6:00 PM',
                'plan_id' => 2
            ],//14
            [
                'day' => 'Saturday',
                'fasting_status' => '4:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 3 liters',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => 'Grilled chicken breast with roasted sweet potatoes and steamed broccoli',
                'lunch_time' => '1:00 pm',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id' => 3
            ],//15
            [
                'day' => 'Sunday',
                'fasting_status' => '4:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 3 liters',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => 'Stir-fried tofu with mixed vegetables and brown rice',
                'lunch_time' => '1:00 pm',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id' => 3
            ],//16
            [
                'day' => 'Monday',
                'fasting_status' => '4:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 3 liters',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => 'Baked salmon served with quinoa pilaf and sautéed spinach',
                'lunch_time' => '1:00 pm',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id' => 3
            ],//17
            [
                'day' => 'Tuesday',
                'fasting_status' => '4:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 3 liters',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => 'Turkey chili with kidney beans, served with a side of whole grain bread',
                'lunch_time' => '1:00 pm',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id' => 3
            ],
            [
                'day' => 'Wednesday',
                'fasting_status' => '4:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 3 liters',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => 'Vegetable stir-fry with tofu or tempeh, served over brown rice',
                'lunch_time' => '1:00 pm',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id' => 3
            ],
            [
                'day' => 'Thursday',
                'fasting_status' => '4:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 3 liters',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => 'Grilled steak with roasted potatoes and a mixed green salad',
                'lunch_time' => '1:00 pm',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id' => 3
            ],
            [
                'day' => 'Friday',
                'fasting_status' => '4:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 3 liters',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => 'Lentil soup with a side of whole grain bread and a Greek salad',
                'lunch_time' => '1:00 pm',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id' => 3
            ],
            [
                'day' => 'Saturday',
                'fasting_status' => '6:00 PM - 12:00 PM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Greek yogurt parfait with mixed berries and granola',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Grilled chicken Caesar salad',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Baked salmon with roasted vegetables and quinoa',
                'dinner_time' => '6:00 PM',
                'plan_id' => 4
            ],
            [
                'day' => 'Sunday',
                'fasting_status' => '6:00 PM - 12:00 PM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Avocado toast with poached eggs',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Turkey and avocado wrap',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Vegetable stir-fry with tofu or tempeh over brown rice',
                'dinner_time' => '6:00 PM',
                'plan_id' => 4
            ],
            [
                'day' => 'Monday',
                'fasting_status' => '6:00 PM - 12:00 PM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Whole grain oatmeal with bananas and almonds',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Lentil soup with whole grain bread',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Grilled shrimp with quinoa salad',
                'dinner_time' => '6:00 PM',
                'plan_id' => 4
            ],
            [
                'day' => 'Tuesday',
                'fasting_status' => '6:00 PM - 12:00 PM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Scrambled eggs with spinach and whole grain toast',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Quinoa salad with chickpeas and feta cheese',
                'lunch_time'=> '3:00 PM',
                'dinner_meal' => 'Teriyaki chicken with sweet potatoes and green beans',
                'dinner_time' => '6:00 PM',
                'plan_id' => 4
            ],
            [
                'day' => 'Wednesday',
                'fasting_status' => '6:00 PM - 12:00 PM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Spinach and banana smoothie',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Mixed greens salad with grilled tofu and avocado',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Baked cod with asparagus and wild rice',
                'dinner_time' => '6:00 PM',
                'plan_id' => 4
            ],
            [
                'day' => 'Thursday',
                'fasting_status' => '6:00 PM - 12:00 PM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Whole grain pancakes with berries and honey',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Caprese salad with fresh mozzarella and tomatoes',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Stir-fried beef with mixed vegetables and brown rice',
                'dinner_time' => '6:00 PM',
                'plan_id' => 4
            ],
            [
                'day' => 'Friday',
                'fasting_status' => '6:00 PM - 12:00 PM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Veggie omelette with whole grain toast',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Spinach and feta stuffed chicken breast with potatoes',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Quinoa-stuffed bell peppers with side salad',
                'dinner_time' => '6:00 PM',
                'plan_id' => 4
            ],
            [
                'day' => 'Saturday',
                'fasting_status' => 'Breaking fast',
                'quantity_of_Water' => '3-4 liters',
                'breakfast_meal' => 'Whole grain pancakes with berries and a drizzle of honey',
                'breakfast_time' => '8:00 AM',
                'lunch_meal' => 'Caprese salad with fresh mozzarella, tomatoes, and basil',
                'lunch_time' => '12:30 PM',
                'dinner_meal' => 'Grilled steak with roasted potatoes and mixed vegetables',
                'dinner_time' => '6:30 PM',
                'plan_id' => 5
            ],
            [
                'day' => 'Sunday',
                'fasting_status' => 'Breaking fast',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Veggie omelette with whole grain toast',
                'breakfast_time' => '8:00 AM',
                'lunch_meal' => 'Spinach and feta stuffed chicken breast with quinoa',
                'lunch_time' => '12:30 PM',
                'dinner_meal' => 'Baked cod with steamed asparagus and wild rice',
                'dinner_time' => '6:30 PM',
                'plan_id' => 5
            ],
            [
                'day' => 'Monday',
                'fasting_status' => 'Sunday 7:00 PM - Monday 7:00 PM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => 'Grilled salmon with quinoa and roasted vegetables',
                'lunch_time' => '7:00 PM',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id' => 5
            ],
            [
                'day' => 'Tuesday',
                'fasting_status' => 'Breaking fast',
                'quantity_of_Water' => '3-4 liters',
                'breakfast_meal' => 'Greek yogurt with mixed berries and almonds',
                'breakfast_time' => '8:00 AM',
                'lunch_meal' => 'Turkey and avocado wrap with whole grain tortilla',
                'lunch_time' => '12:30 PM',
                'dinner_meal' => 'Stir-fried tofu with mixed vegetables and brown rice',
                'dinner_time' => '6:30 PM',
                'plan_id' => 5
            ],
            [
                'day' => 'Wednesday',
                'fasting_status' => 'Breaking fast',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Scrambled eggs with spinach and whole grain toast',
                'breakfast_time' => '8:00 AM',
                'lunch_meal' => 'Grilled chicken Caesar salad with cherry tomatoes and Parmesan cheese',
                'lunch_time' => '12:30 PM',
                'dinner_meal' => 'Vegetable stir-fry with tofu or tempeh served over brown rice',
                'dinner_time' => '6:30 PM',
                'plan_id' => 5
            ],
            [
                'day' => 'Thursday',
                'fasting_status' => 'Wednesday 7:00 PM - Thursday 7:00 PM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => 'Quinoa salad with chickpeas, cucumber, tomatoes, and feta cheese',
                'lunch_time' => '7:00 PM',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id' => 5
            ],
            [
                'day' => 'Friday',
                'fasting_status' => 'Breaking fast',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Oatmeal topped with sliced bananas and honey',
                'breakfast_time' => '8:00 AM',
                'lunch_meal' => 'Lentil soup with a side of whole grain bread',
                'lunch_time' => '12:30 PM',
                'dinner_meal' => 'Baked chicken breast with roasted sweet potatoes and green beans',
                'dinner_time' => '6:30 PM',
                'plan_id' => 5
            ],
            [
                'day' => 'Saturday',
                'fasting_status' => 'Friday 8:00 PM - Saturday 10:00 AM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Scrambled eggs with spinach and whole grain toast',
                'breakfast_time' => '10:00 AM',
                'lunch_meal' => 'Grilled chicken salad with mixed greens, tomatoes, cucumbers, and balsamic vinaigrette',
                'lunch_time' => '1:00 PM',
                'dinner_meal' => 'Baked salmon with quinoa and steamed broccoli',
                'dinner_time' => '6:00 PM',
                'plan_id' => 6
            ],
            [
                'day' => 'Sunday',
                'fasting_status' => 'Saturday 8:00 PM - Sunday 10:00 AM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Greek yogurt with mixed berries, almonds, and honey',
                'breakfast_time' => '10:00 AM',
                'lunch_meal' => 'Turkey and avocado wrap with whole grain tortilla',
                'lunch_time' => '1:00 PM',
                'dinner_meal' => 'Stir-fried tofu with mixed vegetables and brown rice',
                'dinner_time' => '6:00 PM',
                'plan_id' => 6
            ],
            [
                'day' => 'Monday',
                'fasting_status' => 'Sunday 8:00 PM - Monday 10:00 AM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Oatmeal topped with sliced bananas, walnuts, and a drizzle of maple syrup',
                'breakfast_time' => '10:00 AM',
                'lunch_meal' => 'Lentil soup with a side of whole grain bread',
                'lunch_time' => '1:00 PM',
                'dinner_meal' => 'Grilled steak with roasted sweet potatoes and asparagus',
                'dinner_time' => '6:00 PM',
                'plan_id' => 6
            ],
            [
                'day' => 'Tuesday',
                'fasting_status' => 'Monday 8:00 PM - Tuesday 10:00 AM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Whole grain pancakes with berries and a dollop of Greek yogurt',
                'breakfast_time' => '10:00 AM',
                'lunch_meal' => 'Caprese salad with fresh mozzarella, tomatoes, basil, and balsamic glaze',
                'lunch_time' => '1:00 PM',
                'dinner_meal' => 'Veggie stir-fry with tofu served over quinoa',
                'dinner_time' => '6:00 PM',
                'plan_id' => 6
            ],
            [
                'day' => 'Wednesday',
                'fasting_status' => 'Tuesday 8:00 PM - Wednesday 10:00 AM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Smoothie with spinach, banana, almond milk, protein powder, and peanut butter',
                'breakfast_time' => '10:00 AM',
                'lunch_meal' => 'Quinoa salad with chickpeas, cucumber, tomatoes, feta cheese, and lemon-tahini dressing',
                'lunch_time' => '1:00 PM',
                'dinner_meal' => 'Grilled shrimp with roasted vegetables and couscous',
                'dinner_time' => '6:00 PM',
                'plan_id' => 6
            ],
            [
                'day' => 'Thursday',
                'fasting_status' => 'Wednesday 8:00 PM- Thursday 10:00 AM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Avocado toast with sliced tomatoes, arugula, and a poached egg',
                'breakfast_time' => '10:00 AM',
                'lunch_meal' => 'Chicken Caesar salad with romaine lettuce, grilled chicken, croutons, Parmesan cheese, and Caesar dressing',
                'lunch_time' => '1:00 PM',
                'dinner_meal' => 'Vegetable curry with tofu served over brown rice',
                'dinner_time' => '6:00 PM',
                'plan_id' => 6
            ],
            [
                'day' => 'Friday',
                'fasting_status' => 'Thursday 8:00 PM - Friday 10:00 AM',
                'quantity_of_Water' => '2-3 liters',
                'breakfast_meal' => 'Veggie omelette with mushrooms, bell peppers, onions, and cheddar cheese',
                'breakfast_time' => '10:00 AM',
                'lunch_meal' => 'Spinach and feta stuffed chicken breast with quinoa pilaf',
                'lunch_time' => '1:00 PM',
                'dinner_meal' => 'Baked cod with roasted Brussels sprouts and wild rice',
                'dinner_time' => '6:00 PM',
                'plan_id' => 6
            ],
            [

                'day' => 'Saturday',
                'fasting_status' => 'Breacking Fast',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => 'Avocado toast with poached eggs',
                'breakfast_time' => '8:00 AM',
                'lunch_meal' => 'Grilled chicken Caesar salad with whole grain croutons',
                'lunch_time' => '12:30 PM',
                'dinner_meal' => 'Baked cod with roasted vegetables',
                'dinner_time' => '6:30 PM',
                'plan_id'=> 7
            ],

            [
                'day' => 'Sunday',
                'fasting_status' => 'Fasting 24 hour',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => '',
                'lunch_time' => '',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id'=> 7
            ],
            [
                'day' => 'Monday',
                'fasting_status' => 'Breaking Fast',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => 'Berry smoothie bowl',
                'breakfast_time' => '8:00 AM',
                'lunch_meal' => 'Turkey and hummus wrap with whole grain tortilla',
                'lunch_time' => '12:30 PM',
                'dinner_meal' => 'Vegetable stir-fry with tofu served over brown rice',
                'dinner_time' => '6:30 PM',
                'plan_id'=> 7 // plan_id
            ],
            [
                'day' => 'Tuesday',
                'fasting_status' => 'Fasting 24 hour',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => '',
                'lunch_time' => '',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id'=> 7  // plan_id
            ],
            [
                'day' => 'Wednesday',
                'fasting_status' => 'Breaking Fast',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => 'Oatmeal topped with sliced bananas and almonds',
                'breakfast_time' => '8:00 AM',
                'lunch_meal' => 'Lentil soup with a side of whole grain bread',
                'lunch_time' => '12:30 PM',
                'dinner_meal' => 'Grilled shrimp with roasted sweet potatoes and asparagus',
                'dinner_time' => '6:30 PM',
                'plan_id'=> 7  // plan_id
            ],
            [
                'day' => 'Thursday',
                'fasting_status' => 'Fasting 24 hour',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => '',
                'breakfast_time' => '',
                'lunch_meal' => '',
                'lunch_time' => '',
                'dinner_meal' => '',
                'dinner_time' => '',
                'plan_id'=> 7  // plan_id
            ],
            [
                'day' => 'Friday',
                'fasting_status' => 'Breaking Fast',
                'quantity_of_Water' => 'At least 8 glasses (2 liters)',
                'breakfast_meal' => 'Whole grain pancakes with berries and a drizzle of honey',
                'breakfast_time' => '8:00 AM',
                'lunch_meal' => 'Quinoa salad with chickpeas, cucumber, tomatoes, and feta cheese',
                'lunch_time' => '12:30 PM',
                'dinner_meal' => 'Grilled chicken breast with roasted vegetables and couscous',
                'dinner_time' => '6:30 PM',
                'plan_id'=> 7
            ],
            [
                'day' => 'Saturday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Veggie scramble with whole grain toast',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Greek yogurt parfait',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Grilled salmon with roasted sweet potatoes',
                'dinner_time' => '6:00 PM',
                'plan_id' => 8
            ],
            [
                'day' => 'Sunday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Overnight oats with mixed berries',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Avocado and black bean wrap with side salad',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Turkey chili with whole grain bread',
                'dinner_time' => '6:00 PM',
                'plan_id' => 8
            ],
            [
                'day' => 'Monday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Quinoa and vegetable stir-fry',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Cottage cheese with sliced peaches',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Grilled tofu with brown rice and steamed vegetables',
                'dinner_time' => '6:00 PM',
                'plan_id' => 8
            ],
            [
                'day' => 'Tuesday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Spinach and feta omelette',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Hummus with carrot sticks',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Grilled shrimp with quinoa salad',
                'dinner_time' => '6:00 PM',
                'plan_id' => 8
            ],
            [
                'day' => 'Wednesday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Whole grain pancakes with fruit',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'ATeriyaki chicken with roasted sweet potatoes and green beans',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Tuna salad with mixed greens and whole grain bread',
                'dinner_time' => '6:00 PM',
                'plan_id' => 8
            ],
            [
                'day' => 'Thursday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Whole grain pasta with marinara sauce and vegetables',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Greek yogurt with honey and walnuts',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Grilled steak with roasted potatoes and asparagus',
                'dinner_time' => '6:00 PM',
                'plan_id' => 8
            ],
            [
                'day' => 'Friday',
                'fasting_status' => '8:00 PM - 12:00 PM',
                'quantity_of_Water' => 'At least 2 liters',
                'breakfast_meal' => 'Veggie omelette with whole grain toast',
                'breakfast_time' => '12:00 PM',
                'lunch_meal' => 'Sliced cucumber with hummus',
                'lunch_time' => '3:00 PM',
                'dinner_meal' => 'Baked chicken with quinoa and sautéed spinach',
                'dinner_time' => '6:00 PM',
                'plan_id' => 8
            ],
        ];
        foreach ($meals as $meal) {
            \App\Models\Meal::create($meal);
        }
    }
}
