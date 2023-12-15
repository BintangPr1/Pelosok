<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show($item)
{
    // Here, $item will contain the value passed in the URL
    // You can use this value to fetch details about the selected item
    // For simplicity, you can use a switch statement or a lookup in your database

    // Example using a switch statement:
    switch ($item) {
        case 'palembang':
            $details = [
                'name' => 'Palembang',
                'image' => 'card1.png',
                'price' => '1.500.000',
                'gender' => 'Male',
                'description' => 'Description for Palembang...',
                // Add other details as needed
            ];
            break;

        case 'bali':
            $details = [
                'name' => 'Bali: Kebaya',
                'image' => 'card2.png',
                'price' => '2.500.000',
                'gender' => 'Female',
                'description' => 'The traditional attire of Bali, known as "Kebaya," 
                is a captivating cultural ensemble. With its vibrant colors and intricate designs, 
                Kebaya represents the essence of Balinese culture. The combination of the elegantly
                 designed top and sarung skirt imparts a graceful appearance, while accessories like 
                 bracelets and small crowns add refinement. Kebaya goes beyond fashion; it holds 
                 profound cultural significance, worn during ceremonies, religious rituals, and 
                 special events. It symbolizes the rich cultural identity and mesmerizing artistic heritage of Balinese society.',
                
                // Add other details as needed
            ];
            break;

        case 'jambi':
            $details = [
                'name' => 'Jambi: Kurung Tanggung',
                'image' => 'card3.png',
                'price' => '2.500.000',
                'gender' => 'Female',
                'description' => 'Kurung Tanggung, the traditional attire from Jambi, 
                Indonesia, is a captivating cultural ensemble. Adorned with vibrant 
                colors and intricate patterns, Kurung Tanggung beautifully represents 
                the rich heritage of Jambi. This attire combines the elegance of the 
                kebaya top with the graceful sarung skirt, creating a dignified appearance.
                 Accessories like bracelets and delicate headpieces add a touch of refinement. 
                 Beyond mere fashion, Kurung Tanggung holds profound cultural significance, 
                 worn during ceremonies, cultural events, and special occasions. It stands as 
                 a potent symbol of Jambi cultural identity and artistic legacy, much like the Shari Bali of Balinese culture.',
                    
                    // Add other details as needed
            ];
            break;

        case 'shari':
            $details = [
                'name' => 'Sunda : Salontreng',
                'image' => 'card4.png',
                'price' => '1.500.000',
                'gender' => 'Male',
                'description' => 'Description for Bali...',
                        
                        // Add other details as needed
            ];
            break;

        case 'sumatra utara':
            $details = [
                'name' => 'Sumatra Utara',
                'image' => 'card5.png',
                'price' => '1.000.000',
                'gender' => 'Female',
                'description' => 'Description for Sumatra Utara...',
                            
                           
            ];
            break;

        case 'lampung':
                $details = [
                'name' => 'lampung',
                'image' => 'card6.png',
                'price' => '1.000.000',
                'gender' => 'Female',
                'description' => 'Description for Lampung...',
                                
                              
            ];
            break;

        case 'jawa barat':
            $details = [
                'name' => 'Jawa Barat',
                'image' => 'card7.png',
                'price' => '1.000.000',
                'gender' => 'Male',
                'description' => 'Description for Jawa Barat...',
                                    
                                   
            ];
            break;

        case 'sumatra barat':
            $details = [
                'name' => 'Sumatra Barat',
                'image' => 'card8.png',
                'price' => '1.000.000',
                'gender' => 'Male',
                'description' => 'Description for Sumatra Barat...',
                                    
                                   
            ];
            break;
                case 'sulawesi':
            $details = [
                'name' => 'Sulawesi',
                'image' => 'card9.png',
                'price' => '2.000.000',
                'gender' => 'Female',
                'description' => 'Description for Sulawesi...',
                                    
                                   
            ];
            break;

        case 'banten':
            $details = [
                'name' => 'Banten',
                'image' => 'card10.png',
                'price' => '2.000.000',
                'gender' => 'Female',
                'description' => 'Description for Banten...',
                                    
                                
            ];
            break;

        case 'minang':
            $details = [
                'name' => 'Minang',
                'image' => 'card11.png',
                'price' => '1.500.000',
                'gender' => 'Female',
                'description' => 'Description for Minang...',
                                    
                                
            ];
            break;
        case 'dayak':
            $details = [
                'name' => 'Dayak',
                'image' => 'card12.png',
                'price' => '1.500.000',
                'gender' => 'Female',
                'description' => 'Description for Dayak...',
                                    
                                
            ];
            break;

    case 'kalimantan barat':
        $details = [
            'name' => 'Kalimantan Barat',
            'image' => 'card13.png',
            'price' => '1.500.000',
            'gender' => 'Male',
            'description' => 'Description for Kalimantan Barat...',
                                
                            
        ];
        break;

    case 'batak':
        $details = [
            'name' => 'Batak',
            'image' => 'card14.png',
            'price' => '1.000.000',
            'gender' => 'Male',
            'description' => 'Description for Batak...',
                                
                            
        ];
        break;

    case 'sulawesi2':
        $details = [
            'name' => 'Sulawesi',
            'image' => 'card15.png',
            'price' => '1.500.000',
            'gender' => 'Male',
            'description' => 'Description for Sulawesi...',
                                
                            
        ];
        break;

    case 'sunda':
        $details = [
            'name' => 'Sunda : Salontreng',
            'image' => 'card16.png',
            'price' => '1.500.000',
            'gender' => 'Male',
            'description' => 'Salontreng, the traditional attire of the Sunda region in Indonesia, 
            is a captivating representation of Sundanese culture. Its vibrant colors, unique motifs, 
            intricately designed kebaya, and gracefully draped selendang combine to create an elegant ensemble. 
            With its long sarung skirt and ornate accessories, like bracelets and small crowns, 
            Salontreng exudes refinement. Beyond fashion, it holds deep cultural significance, worn 
            during ceremonies, rituals, and special events. Salontreng is a powerful symbol of the rich 
            cultural identity and artistic heritage of the Sundanese people.',
                                
                            
        ];
        break;

            
        // Add more cases for other items

        default:
            abort(404); // If the item is not found, return a 404 error
    }

    return view('itempage', compact('details'));
}

}
