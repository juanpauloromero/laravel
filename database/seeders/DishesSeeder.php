<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DishesSeeder extends Seeder



{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes')->insert([
            ['id' => 1, 'dish_name' => 'Macaroni à la viande', 'dish_description' => 'Macaroni, boeuf haché, crème de tomate, sauce au fromage (lait, produit de fromage fondu, fromage à la crème, cheddar, beurre salé, farine, sucre, base de poulet (GMS)), oignon, fines herbes.', 'created_at' => '2022-08-26', 'is_active' => 1, 'image' => 'null'],

            ['id' => 2, 'dish_name' => 'Porc effiloché BBQ', 'dish_description' => 'Épaule de porc, pomme de terre douce, sauce BBQ (Moutarde), maïs en grains, vin rouge (Sulfites), crème 35% (Lait), 
   pomme de terre, beurre, huile de canola, paprika, ail en poudre, sel, persil, poivre, laurier, épices à steak (GMS).', 'created_at' => '2022-08-26', 'is_active' => 1, 'image' => 'null'],

            ['id' => 3, 'dish_name' => 'Saumon sauce au beurre blanc', 'dish_description' => 'Orzo au pesto (orzo, poivrons, courgette, pesto basilic (lait, arachides,noix,soya,sésame)), saumon, 
 sauce au beurre blanc (crème (lait, cellulose microcristalline, carraghénine, gomme de cellulose), vin blanc dénaturé (sulfites), échalote, huile, miel, beurre, estragon, sel, poivre)., pomme de terre, beurre, huile de canola, paprika, ail en poudre, sel, persil, poivre, laurier, épices à steak (GMS).', 'created_at' => '2022-08-26', 'is_active' => 1, 'image' => 'null'],

            ['id' => 4, 'dish_name' => 'Pain aux lentilles', 'dish_description' => 'Lentilles, fromage mozzarella (lait), chapelure nature (blé), œuf, oignon, navet, sauce tomate (jus de tomate,tomate en dé, tomate broyée, sucre, huile de canola, ail, épices), pomme de terre (sulfites), maïs, carotte, pois mange-tout, beurre, poivre..', 'created_at' => '2022-08-26', 'is_active' => 1, 'image' => 'null'],

            ['id' => 5, 'dish_name' => 'Pâté chinois traditionnel', 'dish_description' => 'Purée de pomme de terre (pomme de terre, beurre (lait), sel, poivre), maïs en crème, bœuf haché (bœuf haché, oignon, ail, poudre d’oignon, poudre d’ail, assaisonnement noirci), paprika', 'created_at' => '2022-08-26', 'is_active' => 1, 'image' => 'null'],

            ['id' => 6, 'dish_name' => 'Boeuf braisé Stroganoff', 'dish_description' => 'Nouilles aux oeufs, boeuf, eau, oignon, vin rouge dénaturé, huile de canola, yogourt, champignon,farine, beurre, moutarde de Dijon, sel, poudre d\'ail, paprika, poivre, feuille de Laurier.Blé, oeufs, sulfites, lait, moutarde, sulfate.', 'created_at' => '2022-08-26', 'is_active' => 1, 'image' => 'null'],

            ['id' => 7, 'dish_name' => 'Brochette de Poulet, sauce barbecue', 'dish_description' => 'Riz blanc, poulet, poivron rouge, poivron vert, carotte, oignon rouge, huile, riz sauvage, sel, sauce barbecue (eau, fond veau maison, sauce barbecue (gluten, GMS, sulfites), cassonade, épices barbecue (GMS)), oignon, ail, poivre.', 'created_at' => '2022-08-26', 'is_active' => 1, 'image' => 'null'],

            ['id' => 8, 'dish_name' => 'Émincé de volaille', 'dish_description' => 'Poulet, fond maison (os de veau, eau, carotte, céleri, oignon, pâte de tomate, épices, farine sans gluten, huile, colorant), haricots verts, nouilles aux œufs (oeuf, blé, gluten), champignon, crème (crème, lait, cellulose microcristalline, carraghénine, gomme de cellulose), poivron rouge, vin blanc dénaturé (sulfites), ail.', 'created_at' => '2022-08-26', 'is_active' => 1, 'image' => 'null'],

            ['id' => 9, 'dish_name' => 'Poulet au beurre', 'dish_description' => 'Poulet, chou-fleur, pois verts, sauce poulet au beurre (tomate broyée, yogourt nature (lait),base de sauce poulet au beurre, lait évaporé, cassonade, jus de citron concentré (sulfites),beurre non salé, gingembre, fécule de maïs, poudre d’oignon, poudre d’ail, sel, curcuma, poivre, ciboulette. ', 'created_at' => '2022-08-26', 'is_active' => 1, 'image' => 'null'],

            ['id' => 10, 'dish_name' => 'Boeuf à l\'orange', 'dish_description' => 'Riz basmati, bœuf, légumes (pois mange tout, oignon rouge, poivron vert, poivron rouge, carotte),sauce à l’orange (jus d’orange, sauce hoisin (soya, blé), oignon, eau, sauce soya, orange, fécule de maïs, gingembre, graines de sésame, ail dans l’huile), sel, poivre.', 'created_at' => '2022-08-26', 'is_active' => 1, 'image' => 'null'],

            ['id' => 11, 'dish_name' => 'Pain de viande, sauce tomate', 'dish_description' => 'Pain de viande (bœuf haché, bacon, chapelure (blé, gluten), œuf, carotte, oignon, céleri, fines herbes, sel,poivre), purée de pomme de terre (pomme de terre, beurre (lait)), sauce tomate: (tomate italienne, crème de tomate, eau, oignon, tomate en dés, cassonade, huile végétale, ail, sel, basilic, poivre), pois vert, carotte,maïs.', 'created_at' => '2022-08-26', 'is_active' => 1, 'image' => 'null'],

            ['id' => 12, 'dish_name' => 'Fettuccines aux fruits de mer', 'dish_description' => 'Fettuccines (blé), eau, goberge (poisson), crevettes de Matane (fruit de mer), pétoncles, crème culinaire (lait, soya), échalotes, vin blanc dénaturé (sulfites), parmesan, huile, jus de citron, aneth, ail, base de poisson (sel, poudre de poisson, fécule de pomme de terre, protéines de maïs hydrolysées, extrait sec de sirop de maïs, sucre, extrait de levure, huile de palme, légumes déshydratés (carottes, oignons), dextrose, épices (moutarde), inosinate disodique, guanylate disodique, colorant, acide citrique), sauce sriracha, sucre, sel, safran, zeste de citron.', 'created_at' => '2022-08-26', 'is_active' => 1, 'image' => 'null'],
        ]);
    }
}
