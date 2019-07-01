<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([
            'category_id' => '4',
            'name' => 'Galileo',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other diagnostic procedures on anus and perianal tissue',
            'desc' => 'Fusion of Thoracolumbar Vertebral Joint with Interbody Fusion Device, Anterior Approach, Anterior Column, Percutaneous Endoscopic Approach',
            'short_desc' => 'Fusion T-lum Jt w Intbd Fus Dev, Ant Appr A Col, Perc Endo',
            'price' => '8413941.4',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Look at Me (Comme une image)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Unilateral radical mastectomy',
            'desc' => 'Repair Right Lower Extremity Lymphatic, Open Approach',
            'short_desc' => 'Repair Right Lower Extremity Lymphatic, Open Approach',
            'price' => '8070594.08',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Human Capital (Il capitale umano)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Closed [transurethral] biopsy of bladder',
            'desc' => 'Removal of Autologous Tissue Substitute from Left Carpal Joint, Open Approach',
            'short_desc' => 'Removal of Autol Sub from L Carpal Jt, Open Approach',
            'price' => '9287613.24',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Brothers Lionheart, The (Bröderna Lejonhjärta)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Endoscopic removal of bronchial device(s) or substances',
            'desc' => 'Caregiver Training in Transfer using Orthosis',
            'short_desc' => 'Caregiver Training in Transfer using Orthosis',
            'price' => '8882764.9',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Reign of Assassins',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Corneal transplant, not otherwise specified',
            'desc' => 'Restriction of Right Lower Lobe Bronchus, Open Approach',
            'short_desc' => 'Restriction of Right Lower Lobe Bronchus, Open Approach',
            'price' => '3569638.72',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Dont Drink the Water',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Reopening of recent laparotomy site',
            'desc' => 'Dilation of Splenic Artery, Bifurcation, with Two Intraluminal Devices, Percutaneous Approach',
            'short_desc' => 'Dilate Splenic Art, Bifurc, w 2 Intralum Dev, Perc',
            'price' => '5320142.41',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => '99 River Street',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Excision of anus',
            'desc' => 'Drainage of Right Temporomandibular Joint, Open Approach',
            'short_desc' => 'Drainage of Right Temporomandibular Joint, Open Approach',
            'price' => '6340973.24',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Undercurrent',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Ileostomy, not otherwise specified',
            'desc' => 'Removal of Radioactive Element from Male Perineum, Percutaneous Endoscopic Approach',
            'short_desc' => 'Remove Radioact Elem from Male Perineum, Perc Endo',
            'price' => '6324039.14',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Down and Derby',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Excision of lesion of thyroid',
            'desc' => 'Transfusion of Allogeneic Unspecified Cord Blood Stem Cells into Peripheral Vein, Percutaneous Approach',
            'short_desc' => 'Transfuse Allo Unsp Cord Bld Stem Cell in Periph Vein, Perc',
            'price' => '5706129.22',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Rich Hill',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Removal of implanted devices from bone, tarsals and metatarsals',
            'desc' => 'Release Right Kidney Pelvis, Via Natural or Artificial Opening Endoscopic',
            'short_desc' => 'Release Right Kidney Pelvis, Endo',
            'price' => '8661525.65',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Barneys Great Adventure',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Aspiration or lavage of nasal sinus through natural ostium',
            'desc' => 'Fragmentation in Sigmoid Colon, Percutaneous Endoscopic Approach',
            'short_desc' => 'Fragmentation in Sigmoid Colon, Perc Endo Approach',
            'price' => '2967786.3',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Treasure Island',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Labial frenotomy',
            'desc' => 'Drainage of Right Hip Bursa and Ligament, Open Approach',
            'short_desc' => 'Drainage of Right Hip Bursa and Ligament, Open Approach',
            'price' => '4594993.62',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Gunbuster (Top wo Narae)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Microscopic examination of specimen from nervous system and of spinal fluid, other microscopic examination',
            'desc' => 'Transfer Back Subcutaneous Tissue and Fascia with Skin, Subcutaneous Tissue and Fascia, Open Approach',
            'short_desc' => 'Transfer Back Subcu/Fascia w Skin, Subcu, Fascia, Open',
            'price' => '9768825.46',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Touki Bouki',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Microscopic examination of specimen from female genital tract, parasitology',
            'desc' => 'Dilation of Lingula Bronchus with Intraluminal Device, Via Natural or Artificial Opening',
            'short_desc' => 'Dilation of Lingula Bronchus with Intralum Dev, Via Opening',
            'price' => '7775345.07',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Happythankyoumoreplease',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Diagnostic interview and evaluation, not otherwise specified',
            'desc' => 'Fragmentation in Descending Colon, Via Natural or Artificial Opening',
            'short_desc' => 'Fragmentation in Descending Colon, Via Opening',
            'price' => '500628.87',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Evangelion: 1.0 You Are (Not) Alone (Evangerion shin gekijôban: Jo)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Resection of vessel with anastomosis, other thoracic vessels',
            'desc' => 'Revision of Infusion Device in Left Ankle Joint, Percutaneous Approach',
            'short_desc' => 'Revision of Infusion Device in L Ankle Jt, Perc Approach',
            'price' => '9284435.18',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Kissed by Winter (Vinterkyss)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Urethral meatoplasty',
            'desc' => 'Removal of External Fixation Device from Right Tarsal, Open Approach',
            'short_desc' => 'Removal of Ext Fix from R Tarsal, Open Approach',
            'price' => '1958455.61',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Man About Town',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Closed [aspiration] [needle] [percutaneous] biopsy of pancreas',
            'desc' => 'Change Drainage Device in Left Upper Extremity, External Approach',
            'short_desc' => 'Change Drainage Device in L Up Extrem, Extern Approach',
            'price' => '3755184.8',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Passion Play',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other excision of joint, unspecified site',
            'desc' => 'Drainage of Pericardial Cavity with Drainage Device, Percutaneous Endoscopic Approach',
            'short_desc' => 'Drainage of Pericard Cav with Drain Dev, Perc Endo Approach',
            'price' => '5794596.54',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Southland Tales',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Arthroplasty of metacarpophalangeal and interphalangeal joint with implant',
            'desc' => 'Drainage of Male Perineum with Drainage Device, Open Approach',
            'short_desc' => 'Drainage of Male Perineum with Drain Dev, Open Approach',
            'price' => '638761.9',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Beautiful',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other incision of soft tissue of hand',
            'desc' => 'Extirpation of Matter from Penis, Percutaneous Endoscopic Approach',
            'short_desc' => 'Extirpation of Matter from Penis, Perc Endo Approach',
            'price' => '2972852.41',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'A Husband of Round Trip',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other plastic operations on muscle',
            'desc' => 'Excision of Left Ankle Joint, Percutaneous Endoscopic Approach',
            'short_desc' => 'Excision of Left Ankle Joint, Perc Endo Approach',
            'price' => '1198832.71',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Yacoubian Building, The (Omaret yakobean)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Infusion of vasopressor agent',
            'desc' => 'Excision of Right External Jugular Vein, Percutaneous Approach, Diagnostic',
            'short_desc' => 'Excision of R Ext Jugular Vein, Perc Approach, Diagn',
            'price' => '5441316.33',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Paths of Hate',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Resection of vessel with anastomosis, lower limb veins',
            'desc' => 'Reposition Right Elbow Joint, Percutaneous Approach',
            'short_desc' => 'Reposition Right Elbow Joint, Percutaneous Approach',
            'price' => '8500120.09',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Bastards',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Phacoemulsification and aspiration of cataract',
            'desc' => 'Fusion of 2 to 7 Thoracic Vertebral Joints with Synthetic Substitute, Posterior Approach, Anterior Column, Percutaneous Endoscopic Approach',
            'short_desc' => 'Fusion 2-7 T Jt w Synth Sub, Post Appr A Col, Perc Endo',
            'price' => '2791655.86',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'The Best of Me',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Repair of mallet finger',
            'desc' => 'Extirpation of Matter from Left Pleura, Percutaneous Approach',
            'short_desc' => 'Extirpation of Matter from Left Pleura, Perc Approach',
            'price' => '2230123.48',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'For Me and My Gal',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Total hip replacement',
            'desc' => 'Drainage of Right Thorax Bursa and Ligament, Percutaneous Endoscopic Approach',
            'short_desc' => 'Drainage of R Thorax Bursa/Lig, Perc Endo Approach',
            'price' => '7075868.71',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Baby Mama',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Homotransplant of pancreas',
            'desc' => 'Revision of Vascular Access Device in Trunk Subcutaneous Tissue and Fascia, Percutaneous Approach',
            'short_desc' => 'Revision of VAD in Trunk Subcu/Fascia, Perc Approach',
            'price' => '2885067.84',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Rage of Honor',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Laparoscopic supracervical hysterectomy [LSH]',
            'desc' => 'Change Drainage Device in Male Perineum, External Approach',
            'short_desc' => 'Change Drainage Device in Male Perineum, External Approach',
            'price' => '6533000.45',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Breakfast at Tiffanys',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Incision of cerebral meninges',
            'desc' => 'Extirpation of Matter from Left Abdomen Tendon, Percutaneous Endoscopic Approach',
            'short_desc' => 'Extirpation of Matter from L Abd Tendon, Perc Endo Approach',
            'price' => '7901316.07',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Attack of the 5 Ft. 2 Women (National Lampoons Attack of the 5 Ft 2 Woman)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Open reduction of fracture without internal fixation, other specified bone',
            'desc' => 'Revision of Drainage Device in Mouth and Throat, Via Natural or Artificial Opening',
            'short_desc' => 'Revision of Drainage Device in Mouth and Throat, Via Opening',
            'price' => '2502709.22',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'The Moromete Family',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Removal of intraluminal foreign body from mouth without incision',
            'desc' => 'Drainage of Left Wrist Joint with Drainage Device, Percutaneous Approach',
            'short_desc' => 'Drainage of Left Wrist Joint with Drain Dev, Perc Approach',
            'price' => '2363580.5',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Giuseppe Makes a Movie',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other diagnostic procedures on vagina and cul-de-sac',
            'desc' => 'Dilation of Left Ulnar Artery, Percutaneous Endoscopic Approach',
            'short_desc' => 'Dilation of Left Ulnar Artery, Perc Endo Approach',
            'price' => '3516329.55',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Office Killer',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other extracapsular extraction of lens',
            'desc' => 'Supplement Middle Colic Artery with Nonautologous Tissue Substitute, Percutaneous Endoscopic Approach',
            'short_desc' => 'Supplement Mid Colic Art with Nonaut Sub, Perc Endo Approach',
            'price' => '7121898.04',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Liar Liar',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other destruction of chorioretinal lesion',
            'desc' => 'Compression of Left Upper Extremity using Intermittent Pressure Device',
            'short_desc' => 'Compression of L Up Extrem using Intermit Pressure Dev',
            'price' => '2855153.46',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Evidence of Blood',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Open biopsy of soft tissue',
            'desc' => 'Introduction of Radioactive Substance into Genitourinary Tract, Percutaneous Approach',
            'short_desc' => 'Introduction of Radioact Subst into GU Tract, Perc Approach',
            'price' => '8140621.22',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Heartbreaker (LArnacoeur)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Angiocardiography of left heart structures',
            'desc' => 'Bypass Left Common Iliac Artery to Bilateral External Iliac Arteries with Synthetic Substitute, Percutaneous Endoscopic Approach',
            'short_desc' => 'Bypass L Com Iliac Art to B Ext Ilia w Synth Sub, Perc Endo',
            'price' => '6267660.61',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Catwalk',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Lithium therapy',
            'desc' => 'Excision of Right Middle Ear, Open Approach, Diagnostic',
            'short_desc' => 'Excision of Right Middle Ear, Open Approach, Diagnostic',
            'price' => '1233558.13',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Shane',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Removal of eye prosthesis',
            'desc' => 'Insertion of Infusion Device into Right Carpal Joint, Open Approach',
            'short_desc' => 'Insertion of Infusion Device into R Carpal Jt, Open Approach',
            'price' => '4504001.77',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Mrs. Soffel',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other operations on retina, choroid, and posterior chamber',
            'desc' => 'Supplement Left Scapula with Synthetic Substitute, Percutaneous Endoscopic Approach',
            'short_desc' => 'Supplement Left Scapula with Synth Sub, Perc Endo Approach',
            'price' => '3603514.25',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'I Married a Witch',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Excision of lesion of lacrimal gland',
            'desc' => 'Removal of Extraluminal Device from Kidney, Percutaneous Approach',
            'short_desc' => 'Removal of Extraluminal Device from Kidney, Perc Approach',
            'price' => '5652487.01',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Other Sister, The',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Microscopic examination of specimen from skin and other integument, toxicology',
            'desc' => 'Bypass Right External Iliac Artery to Foot Artery with Synthetic Substitute, Percutaneous Endoscopic Approach',
            'short_desc' => 'Bypass R Ext Iliac Art to Foot Art w Synth Sub, Perc Endo',
            'price' => '1043958.55',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Welcome to the South (Benvenuti al Sud)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Fitting of prosthesis of leg, not otherwise specified',
            'desc' => 'Insertion of Endobronchial Valve into Left Lower Lobe Bronchus, Via Natural or Artificial Opening Endoscopic',
            'short_desc' => 'Insertion of Endobronchial Valve into L Low Lobe Bronc, Endo',
            'price' => '3984494.34',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Godzilla',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Scarification of pleura',
            'desc' => 'Destruction of Back Subcutaneous Tissue and Fascia, Percutaneous Approach',
            'short_desc' => 'Destruction of Back Subcu/Fascia, Perc Approach',
            'price' => '7069259.76',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Man in the Saddle',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Autologous bone marrow transplant without purging',
            'desc' => 'Dilation of Upper Vein, Percutaneous Approach',
            'short_desc' => 'Dilation of Upper Vein, Percutaneous Approach',
            'price' => '4524693.87',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'How Do You Write a Joe Schermann Song',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Removal of sutures from thorax',
            'desc' => 'Extirpation of Matter from Cervical Vertebra, Percutaneous Approach',
            'short_desc' => 'Extirpation of Matter from Cervical Vertebra, Perc Approach',
            'price' => '1064545.47',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Condorman',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Partial excision of pituitary gland, transfrontal approach',
            'desc' => 'Immobilization of Left Finger using Brace',
            'short_desc' => 'Immobilization of Left Finger using Brace',
            'price' => '2287053.39',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Behaving Badly',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Excision of internal mammary lymph node',
            'desc' => 'Supplement Right Axilla with Autologous Tissue Substitute, Open Approach',
            'short_desc' => 'Supplement Right Axilla with Autol Sub, Open Approach',
            'price' => '1015920.4',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Me and Orson Welles',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Transsacral rectosigmoidectomy',
            'desc' => 'Removal of Intermittent Pressure Device on Left Toe',
            'short_desc' => 'Removal of Intermittent Pressure Device on Left Toe',
            'price' => '5238872.69',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Orwell Rolls in His Grave',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Lumbar and lumbosacral fusion of the posterior column, posterior technique',
            'desc' => 'Supplement Right Humeral Head with Autologous Tissue Substitute, Open Approach',
            'short_desc' => 'Supplement Right Humeral Head with Autol Sub, Open Approach',
            'price' => '7636753.12',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Safe',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Amnioinfusion',
            'desc' => 'Restriction of Pancreatic Duct with Intraluminal Device, Percutaneous Approach',
            'short_desc' => 'Restrict of Pancreat Duct with Intralum Dev, Perc Approach',
            'price' => '3156814',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Congress, The',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Incision of peritoneum',
            'desc' => 'Drainage of Ascending Colon, Percutaneous Endoscopic Approach, Diagnostic',
            'short_desc' => 'Drainage of Ascending Colon, Perc Endo Approach, Diagn',
            'price' => '9629427.25',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Red Scorpion',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other suture of tendon',
            'desc' => 'Fluoroscopy of Cerebral and Cerebellar Veins using Low Osmolar Contrast',
            'short_desc' => 'Fluoroscopy of Cereb & Cerebel Vein using L Osm Contrast',
            'price' => '8640396.52',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Cool Runnings',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Ureteroneocystostomy',
            'desc' => 'Bypass Left Internal Iliac Artery to Bilateral External Iliac Arteries with Autologous Arterial Tissue, Percutaneous Endoscopic Approach',
            'short_desc' => 'Bypass L Int Iliac Art to B Ext Ilia w Autol Art, Perc Endo',
            'price' => '5683231.95',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Million to Juan, A',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Ultrasonic fragmentation of urinary stones',
            'desc' => 'Reposition Right Glenoid Cavity, Percutaneous Approach',
            'short_desc' => 'Reposition Right Glenoid Cavity, Percutaneous Approach',
            'price' => '2887502.41',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Upstream Color',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Laparoscopic liver biopsy',
            'desc' => 'Bypass Left Kidney Pelvis to Ileum, Open Approach',
            'short_desc' => 'Bypass Left Kidney Pelvis to Ileum, Open Approach',
            'price' => '9474055.78',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Gold Rush, The',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Removal of foreign body from foot without incision',
            'desc' => 'Extirpation of Matter from Right Upper Lung Lobe, Via Natural or Artificial Opening Endoscopic',
            'short_desc' => 'Extirpation of Matter from Right Upper Lung Lobe, Endo',
            'price' => '3646631.97',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Highway Racer',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Hip bearing surface, ceramic-on-polyethylene',
            'desc' => 'Bypass Right Common Iliac Artery to Celiac Artery with Synthetic Substitute, Percutaneous Endoscopic Approach',
            'short_desc' => 'Bypass R Com Iliac Art to Celiac Art w Synth Sub, Perc Endo',
            'price' => '6398812.22',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Small Town in Texas, A',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Destruction of hemorrhoids by cryotherapy',
            'desc' => 'Drainage of Small Intestine, Via Natural or Artificial Opening, Diagnostic',
            'short_desc' => 'Drainage of Small Intestine, Via Opening, Diagn',
            'price' => '3710858.9',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Head Over Heels',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other oxygen enrichment',
            'desc' => 'Plain Radiography of Left Upper Extremity Veins using High Osmolar Contrast',
            'short_desc' => 'Plain Radiography of L Up Extrem Vein using H Osm Contrast',
            'price' => '1833285.5',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Tonight and Every Night',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Metacarpophalangeal fusion',
            'desc' => 'Alteration of Left Upper Extremity with Autologous Tissue Substitute, Open Approach',
            'short_desc' => 'Alteration of L Up Extrem with Autol Sub, Open Approach',
            'price' => '9837431.71',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Brother (Hermano)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Removal of cranial neurostimulator pulse generator',
            'desc' => 'Dilation of Right Temporal Artery, Bifurcation, with Two Intraluminal Devices, Open Approach',
            'short_desc' => 'Dilate R Temporal Art, Bifurc, w 2 Intralum Dev, Open',
            'price' => '1080150.44',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Bronx Tale, A',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Scraping of cornea for smear or culture',
            'desc' => 'Skin and Breast, Extirpation',
            'short_desc' => 'Skin and Breast, Extirpation',
            'price' => '5607000.23',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Tale from the Past, A (Përralle Nga e Kaluara)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Exploratory verbal psychotherapy',
            'desc' => 'Bypass Left Common Iliac Artery to Right External Iliac Artery with Autologous Venous Tissue, Percutaneous Endoscopic Approach',
            'short_desc' => 'Bypass L Com Iliac Art to R Ext Ilia w Autol Vn, Perc Endo',
            'price' => '9002070.89',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Timeline',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Closure of ureterostomy',
            'desc' => 'Bypass Cerebral Ventricle to Cerebral Cisterns with Autologous Tissue Substitute, Open Approach',
            'short_desc' => 'Bypass Cereb Vent to Cereb Cistern w Autol Sub, Open',
            'price' => '3384327.25',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Bull Durham',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Osteopathic manipulative treatment for general mobilization',
            'desc' => 'Dilation of Left Anterior Tibial Artery, Bifurcation, with Four or More Intraluminal Devices, Percutaneous Endoscopic Approach',
            'short_desc' => 'Dilate L Ant Tib Art, Bifurc, w 4+ Intralum Dev, Perc Endo',
            'price' => '1505421.36',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Straight Time',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Removal of foreign body from lens with use of magnet',
            'desc' => 'Excision of Left Upper Extremity Lymphatic, Open Approach',
            'short_desc' => 'Excision of Left Upper Extremity Lymphatic, Open Approach',
            'price' => '4795510.94',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Leos Room (Cuarto de Leo, El)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Closed [percutaneous] [needle] biopsy of thyroid gland',
            'desc' => 'Drainage of Right Middle Lobe Bronchus, Via Natural or Artificial Opening',
            'short_desc' => 'Drainage of Right Middle Lobe Bronchus, Via Opening',
            'price' => '6028514.51',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Quartet',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Size reduction plastic operation',
            'desc' => 'Restriction of Right Vertebral Artery with Extraluminal Device, Percutaneous Endoscopic Approach',
            'short_desc' => 'Restrict R Verteb Art w Extralum Dev, Perc Endo',
            'price' => '9359463.93',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Late Show, The',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other operations on lacrimal system',
            'desc' => 'Revision of Tissue Expander in Upper Extremity Subcutaneous Tissue and Fascia, Open Approach',
            'short_desc' => 'Revise Tissue Expander in Up Extrem Subcu/Fascia, Open',
            'price' => '1662855.09',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Pierrot le fou',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Suture of laceration of ureter',
            'desc' => 'Excision of Right Ureter, Percutaneous Endoscopic Approach, Diagnostic',
            'short_desc' => 'Excision of Right Ureter, Perc Endo Approach, Diagn',
            'price' => '9002316.4',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Band of Brothers',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other arthrotomy, knee',
            'desc' => 'Excision of Greater Omentum, Percutaneous Approach, Diagnostic',
            'short_desc' => 'Excision of Greater Omentum, Percutaneous Approach, Diagn',
            'price' => '3490101.78',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Short Eyes',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Laparoscopic removal of both ovaries at same operative episode',
            'desc' => 'Bypass Right Popliteal Artery to Peroneal Artery with Nonautologous Tissue Substitute, Percutaneous Endoscopic Approach',
            'short_desc' => 'Bypass R Popl Art to Peron Art w Nonaut Sub, Perc Endo',
            'price' => '2861336.79',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Devil, The (Diabel)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other proctopexy',
            'desc' => 'Insertion of Internal Fixation Device into Right Humeral Shaft, Percutaneous Approach',
            'short_desc' => 'Insertion of Int Fix into R Humeral Shaft, Perc Approach',
            'price' => '9629923.75',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Federico Fellinis Autobiography (Federico Fellini - un autoritratto ritrovato)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Frontal sinusotomy',
            'desc' => 'Reposition Right Common Iliac Artery, Percutaneous Endoscopic Approach',
            'short_desc' => 'Reposition Right Common Iliac Artery, Perc Endo Approach',
            'price' => '8771094.7',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Guyver, The',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Other excision of joint, ankle',
            'desc' => 'Excision of Right Neck Muscle, Percutaneous Endoscopic Approach',
            'short_desc' => 'Excision of Right Neck Muscle, Perc Endo Approach',
            'price' => '529904.46',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Ivan the Terrible, Part One (Ivan Groznyy I)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Removal of foreign body from lens without use of magnet',
            'desc' => 'Dilation of Right Popliteal Artery, Bifurcation, with Four or More Intraluminal Devices, Percutaneous Approach',
            'short_desc' => 'Dilate R Popl Art, Bifurc, w 4+ Intralum Dev, Perc',
            'price' => '1299129.4',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Colonel Redl (Oberst Redl)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Antesternal esophagoesophagostomy',
            'desc' => 'Bypass Left Axillary Artery to Right Lower Arm Artery with Nonautologous Tissue Substitute, Open Approach',
            'short_desc' => 'Bypass L Axilla Art to R Low Arm Art w Nonaut Sub, Open',
            'price' => '7953019.77',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Lost Boys: The Thirst',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Vaginal construction with graft or prosthesis',
            'desc' => 'Revision of Intraluminal Device in Left Ear, Percutaneous Endoscopic Approach',
            'short_desc' => 'Revision of Intraluminal Device in L Ear, Perc Endo Approach',
            'price' => '8712103.49',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Naked Prey, The',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Angioplasty of other non-coronary vessel(s)',
            'desc' => 'Repair Female Reproductive System in Products of Conception with Other Device, Percutaneous Endoscopic Approach',
            'short_desc' => 'Repair Fem Reprod Sys in POC w Oth Dev, Perc Endo',
            'price' => '8194809.27',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Liberty',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Intranasal antrotomy',
            'desc' => 'Drainage of Tongue with Drainage Device, Open Approach',
            'short_desc' => 'Drainage of Tongue with Drainage Device, Open Approach',
            'price' => '5789619.26',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Liberty Heights',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Mechanical fragmentation of secondary membrane [after cataract]',
            'desc' => 'Insertion of Intraluminal Device into Left Basilic Vein, Percutaneous Approach',
            'short_desc' => 'Insertion of Intralum Dev into L Basilic Vein, Perc Approach',
            'price' => '9401887.94',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Vampires',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Microscopic examination of specimen from musculoskeletal system and of joint fluid, culture',
            'desc' => 'Replacement of Right Breast with Autologous Tissue Substitute, Percutaneous Approach',
            'short_desc' => 'Replacement of Right Breast with Autol Sub, Perc Approach',
            'price' => '3893889.52',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Playing with Love (Puppy Love) (Maladolescenza)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Ligation of gastric varices',
            'desc' => 'Replacement of Nasopharynx with Autologous Tissue Substitute, Via Natural or Artificial Opening',
            'short_desc' => 'Replacement of Nasopharynx with Autol Sub, Via Opening',
            'price' => '9807102.55',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Triggermen',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Injection of anticoagulant',
            'desc' => 'Transfer Right Upper Leg Muscle with Skin and Subcutaneous Tissue, Percutaneous Endoscopic Approach',
            'short_desc' => 'Transfer R Up Leg Muscle w Skin, Subcu, Perc Endo',
            'price' => '3863031.47',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Scarlet Letter, The',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Rotation tests',
            'desc' => 'Revision of Synthetic Substitute in Hepatobiliary Duct, Percutaneous Endoscopic Approach',
            'short_desc' => 'Revision of Synth Sub in Hepatobil Duct, Perc Endo Approach',
            'price' => '834800.37',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Storm Catcher',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Revision of knee replacement, tibial component',
            'desc' => 'Insertion of Internal Fixation Device into Left Zygomatic Bone, Percutaneous Approach',
            'short_desc' => 'Insertion of Int Fix into L Zygomatic Bone, Perc Approach',
            'price' => '6647193.55',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Milagro Beanfield War',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Radical dissection of thoracic structures',
            'desc' => 'Revision of Autologous Tissue Substitute in Right Metatarsal-Tarsal Joint, Percutaneous Approach',
            'short_desc' => 'Revision of Autol Sub in R Metatarsotars Jt, Perc Approach',
            'price' => '6157903.5',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'How the West Was Won',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Magnetic resonance imaging of musculoskeletal',
            'desc' => 'Drainage of Right Foot Tendon, Percutaneous Approach',
            'short_desc' => 'Drainage of Right Foot Tendon, Percutaneous Approach',
            'price' => '9157737.94',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Caught',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Autologous hematopoietic stem cell transplant with purging',
            'desc' => 'High Dose Rate (HDR) Brachytherapy of Duodenum using Other Isotope',
            'short_desc' => 'HDR Brachytherapy of Duodenum using Oth Isotope',
            'price' => '4177842.18',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Knights Tale, A',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Endovascular replacement of aortic valve',
            'desc' => 'Revision of Synthetic Substitute in Left Metatarsal, Percutaneous Approach',
            'short_desc' => 'Revision of Synth Sub in L Metatarsal, Perc Approach',
            'price' => '1075394.67',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Zero Theorem, The',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Repair of fistula of cervix',
            'desc' => 'Revision of Nonautologous Tissue Substitute in Upper Vein, Open Approach',
            'short_desc' => 'Revision of Nonaut Sub in Up Vein, Open Approach',
            'price' => '3452110.17',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Mutiny on the Bounty',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Extracorporeal shockwave lithotripsy [ESWL] of the gallbladder and/or bile duct',
            'desc' => 'Destruction of Left Parietal Bone, Percutaneous Endoscopic Approach',
            'short_desc' => 'Destruction of Left Parietal Bone, Perc Endo Approach',
            'price' => '7599783.63',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Wonderful Crook, The (Pas si méchant que ça)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Culdocentesis',
            'desc' => 'Reposition Right Metatarsal-Phalangeal Joint with Internal Fixation Device, External Approach',
            'short_desc' => 'Reposition R Metatarsophal Jt with Int Fix, Extern Approach',
            'price' => '5127340.72',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Cobra Woman',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Decompression of trigeminal nerve root',
            'desc' => 'Repair Left Foot, Open Approach',
            'short_desc' => 'Repair Left Foot, Open Approach',
            'price' => '9642559.87',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Year of the Dog',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Laparoscopic procedures for creation of esophagogastric sphincteric competence',
            'desc' => 'Dilation of Transverse Colon, Via Natural or Artificial Opening Endoscopic',
            'short_desc' => 'Dilation of Transverse Colon, Endo',
            'price' => '5237273.17',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Never Die Alone',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Excision of uvula',
            'desc' => 'Replacement of Left Cornea with Autologous Tissue Substitute, External Approach',
            'short_desc' => 'Replacement of Left Cornea with Autol Sub, Extern Approach',
            'price' => '8857965.45',
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'City Below, The (Unter dir die Stadt)',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Laparoscopic removal of both ovaries at same operative episode',
            'desc' => 'Magnetic Resonance Imaging (MRI) of Right Kidney using Other Contrast, Unenhanced and Enhanced',
            'short_desc' => 'MRI of R Kidney using Oth Contrast, Unenh, Enhance',
            'price' => '6635350.9',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Planet of Snail',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Ligation and stripping of varicose veins, other vessels of head and neck',
            'desc' => 'Supplement Left Hand Vein with Nonautologous Tissue Substitute, Open Approach',
            'short_desc' => 'Supplement Left Hand Vein with Nonaut Sub, Open Approach',
            'price' => '8381875.04',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Fame High',
            'slug' => '', 'pic' => '400x400.png', 'spec' => 'Cardiovascular and hematopoietic scan and radioisotope function study',
            'desc' => 'Drainage of Left Patella, Percutaneous Approach, Diagnostic',
            'short_desc' => 'Drainage of Left Patella, Percutaneous Approach, Diagnostic',
            'price' => '1348143.18',
        ]);


        Product::create([
            'category_id' => '1',
            'name' => 'ADIDAS EQT SUPPORT 93/17',
            'slug' => 'adidas-eqt-support-93-17',
            'pic' => 'EQT_Support_93_17_Shoes_Black_CQ5.png',
            'spec' => '<table cellpadding="5px" cellspacing="0" class="tbl-product-attribute-specs" width="100%" border="1"> <tbody> <tr> <th>Quy cách sản phẩm</th> <td>Hộp</td> </tr> <tr> <th>Xuất xứ thương hiệu</th> <td>Đức</td> </tr> <tr> <th>Nơi Sản Xuất</th> <td>Trung Quốc</td> </tr> <tr> <th>Bảo hành</th> <td>6 months</td> </tr> </tbody></table>',
            'short_desc' => 'Giày Thể Thao Adidas EQT Support 93-17 (CQ2396) thiết kế đơn giản, cổ điển mang nét đặc trưng của Adidas tạo cho đôi giày vẻ sang trong tinh tế, phối màu trang nhã của đôi giày giúp người mang dễ phối đồ và sử dụng trong mọi hoàn cảnh.',
            'desc' => '<div itemprop="description"> <p><strong>Giày Thể Thao Adidas EQT Support 93-17 (CQ2396) </strong>thiết kế đơn giản, cổ điển mang nét đặc trưng của Adidas tạo cho đôi giày vẻ sang trong tinh tế, phối màu trang nhã của đôi giày giúp người mang dễ phối đồ và sử dụng trong mọi hoàn cảnh.</p> <p><img src="uploads/EQT_Support_93_17_Shoes_Black_CQ7.png " alt="" width="60%"></p> <p><strong>Đặc điểm nổi bật:</strong></p> <ul> <li>Sản phẩm là hàng chính hãng.</li> <li>EQT Support 93/17 được coi là tinh hoa của adidas, tích hợp đầy đủ công nghệ của quá khứ lẫn tương lai.</li> <li>Khi sở hữu một trong những đôi giày EQT, bạn đã có được câu chuyện 27 năm lao động sáng tạo của những con người luôn muốn mang tới những trải nghiệm tốt nhất bằng slogan "Những gì thiết yếu nhất, không gì là thừa thãi" (Everything that is essential, nothing that is not).</li> <li>EQT support 93/17 là dòng giày được tích hợp những công nghệ hiện đại nhất của adidas.</li> <li>Một trong những điểm sáng tạo ở Adidas là thương hiệu này luôn thay thế những công nghệ giày hiện đại lên các thiết kế cổ điển thay vì chỉ là tung ra các phiên bản giày retro như những thương hiệu khác thường làm. </li> <li>Với adidas EQT, chính bạn là người tạo ra xu hướng và phong cách độc đáo cho riêng mình.</li> <li>Sự tối giản trong thiết kế, màu sắc độc đáo - người mang adidas EQT sẽ tự tạo ra phong cách cho riêng mình, trụ vững, nổi bật trong dòng chảy luôn có xu hướng quay vòng và đào thải của thời trang.</li> </ul> <p><img src="uploads/EQT_Support_93_17_Shoes_Black_CQ6.png " alt="" width="60%"></p> <p><strong>Hướng dẫn chọn size:</strong></p> <p> <img src="uploads/Screen Shot 2018-08-24 at 12.14.02.png "alt="" width="60%"></p> </div>',
            'price' => '2300000',
            'created_at' => '2019-07-02 12:23:36',
            'updated_at' => '2019-07-02 12:23:36',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'NIKE AIR MAX 270 "JUST DO IT"',
            'slug' => 'nike-air-max-270',
            'pic' => 'nike-air-max-270.jpg',
            'spec' => '',
            'short_desc' => '',
            'desc' => '',
            'price' => '2300000',
            'created_at' => '2019-07-02 12:23:36',
            'updated_at' => '2019-07-02 12:23:36',
        ]);
        Product::create([
            'category_id' => '1',
            'name' => 'ADIDAS ULTRABOOST 4.0',
            'slug' => 'adidas-ultraboost-40',
            'pic' => '1561799915_adidas-ultraboost-4-0.png',
            'spec' => '',
            'short_desc' => '',
            'desc' => '',
            'price' => '3300000',
            'created_at' => '2019-07-02 12:23:36',
            'updated_at' => '2019-07-02 12:23:36',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Sneaker Unisex Converse Chuck Taylor All Star 1970s Black/w 2018',
            'slug' => 'sneaker-unisex-converse-chuck-taylor-all-star-1970s-blackw-2018',
            'pic' => '1561886881_giay-sneaker-unisex-converse-chuck-taylor-all-star-1970s-black-w-2018.jpg',
            'spec' => '<table border="1" cellpadding="0" cellspacing="0" style="width:500px">
                <tbody>
                    <tr>
                        <td>Thương hiệu</td>
                        <td>Converse</td>
                    </tr>
                    <tr>
                        <td>Xuất xứ thương hiệu</td>
                        <td>Mỹ</td>
                    </tr>
                    <tr>
                        <td>Sản xuất tại</td>
                        <td>Việt Nam/ Ấn Độ/ Trung Quốc</td>
                    </tr>
                    <tr>
                        <td>SKU</td>
                        <td>8532162220597</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>',
            'short_desc' => 'Là dòng giày tiêu biểu và đặc trưng cho phong cách cổ điển của Converse.
            Chất vải canvas nhẹ, tạo cảm giác thoải mái.
            Lớp lót dày tạo cảm giác êm ái khi vận động.
            Phiên bản mới lớp lót được cải tiến êm hơn & có thể tháo rời giúp bạn dễ dàng vệ sinh.
            Phần đế màu trắng ngà vintage được phủ 1 lớp bóng bên ngoài.
            Logo bên hông giày với phù hiệu của Converse All Star kết hợp với chữ ký của Chuck Taylor.',
            'desc' => '<ul>
                <li><strong>Gi&agrave;y Sneaker Unisex Converse Chuck Taylor All Star 1970s Black/w 2018</strong>&nbsp;được thiết kế từ chất liệu vải canvas nhẹ,&nbsp;d&agrave;y dặn, cứng form hơn.&nbsp;</li>
                <li>Lớp lót dày tạo cảm giác &ecirc;m ái khi v&acirc;̣n đ&ocirc;̣ng, vải d&agrave;y dặn, cứng form hơn.</li>
                <li>Phần đế m&agrave;u trắng ng&agrave; vintage được phủ 1 lớp b&oacute;ng b&ecirc;n ngoài là đi&ecirc;̉m nh&acirc;́n ri&ecirc;ng cho dòng 1970s, dễ vệ sinh hơn.</li>
                <li>D&acirc;y gi&agrave;y d&agrave;y hơn, c&ugrave;ng m&agrave;u với phần đế, tem g&oacute;t đen 1st-tring - đặc trưng ri&ecirc;ng của d&ograve;ng 1970s.</li>
                <li>L&agrave; biểu tượng của văn h&oacute;a thể thao v&agrave; c&aacute;c loại h&igrave;nh nghệ thuật đường phố kiểu Mỹ, truyền cảm hứng v&agrave; sức s&aacute;ng tạo mạnh mẽ đến giới trẻ tr&ecirc;n to&agrave;n thế giới.</li>
            </ul>',
            'price' => '1850000',
            'created_at' => '2019-07-02 12:23:36',
            'updated_at' => '2019-07-02 12:23:36',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Sneaker Unisex Vans Old Skool Black/White',
            'slug' => 'sneaker-unisex-vans-old-skool-blackwhite',
            'pic' => '1561887332_unisex-old-skool-vans.jpg',
            'spec' => '<table border="1" cellspacing="0">
                <tbody>
                    <tr>
                        <td>&nbsp;Thương hiệu</td>
                        <td>&nbsp;Vans</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Xuất xứ thương hiệu</td>
                        <td>&nbsp;Mỹ</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Sản xuất tại</td>
                        <td>&nbsp;Việt Nam / Trung Quốc</td>
                    </tr>
                    <tr>
                        <td>&nbsp;SKU</td>
                        <td>&nbsp;3439714695139</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Model</td>
                        <td>&nbsp;VN000D3HY28</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Chất liệu</td>
                        <td>&nbsp;57% Leather, 43% Canvas</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Lưu &yacute;</td>
                        <td>&nbsp;Sản phẩm kh&ocirc;ng hỗ trợ đổi trả</td>
                    </tr>
                </tbody>
            </table>',
            'short_desc' => 'Đường may tỉ mỉ chắc chắn, dễ vệ sinh. 
            Thiết kế đặc trưng mang đậm chất đường phố. 
            Dễ dàng phối đồ trong mọi hoàn cảnh. 
             Đế giày có độ bám cao.',
            'desc' => '<ul>
                <li><strong>Gi&agrave;y Sneaker Unisex Vans Old Skool Black/White</strong>&nbsp;l&agrave; d&ograve;ng gi&agrave;y được thiết kế đa dạng kiểu d&aacute;ng b&ecirc;n th&acirc;n gi&agrave;y.</li>
                <li>Kiểu d&aacute;ng cổ điển, dễ vệ sinh, với đường may tỉ mỉ chắc chắn.</li>
                <li>Sản phẩm gi&uacute;p hỗ trợ cho bạn hoạt động, di chuyển linh hoạt hơn.</li>
                <li>Phối m&agrave;u cực kỳ đa dạng cho bạn dễ d&agrave;ng lựa chọn v&agrave; thỏa sức mix, match với bất kỳ phong c&aacute;ch n&agrave;o.</li>
                <li>Đa phần thiết kế của Vans ưu ti&ecirc;n bảo vệ đ&ocirc;i ch&acirc;n người d&ugrave;ng tạo n&ecirc;n độ chắc chắn v&agrave; gắn kết ho&agrave;n hảo giữa đế v&agrave; th&acirc;n gi&agrave;y mang một vẻ liền khối.</li>
            </ul>',
            'price' => '1650000',
            'created_at' => '2019-07-02 12:23:36',
            'updated_at' => '2019-07-02 12:23:36',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Sneakers Nam GEOX U NEXSIDE A WHITE',
            'slug' => 'sneakers-nam-geox-u-nexside-a-white',
            'pic' => '1561887480_geox-u-nexside-a-white.jpg',
            'spec' => '<table border="1" cellspacing="0">
                <tbody>
                    <tr>
                        <td>Thương hiệu</td>
                        <td>GEOX</td>
                    </tr>
                    <tr>
                        <td>Xuất xứ thương hiệu</td>
                        <td>&Yacute;</td>
                    </tr>
                    <tr>
                        <td>SKU</td>
                        <td>7879657453278</td>
                    </tr>
                    <tr>
                        <td>Chất liệu</td>
                        <td>73% Leather Bovine Full Grain-14% Textile Mesh Polyester-13% Synthetic Polyureth</td>
                    </tr>
                </tbody>
            </table>',
            'short_desc' => 'Geox là một thương hiệu thời trang nổi tiếng của Ý, chuyên sản xuất giày dép, quần áo, túi xách, phụ kiện cho nam, nữ, trẻ em bằng chất liệu vải thoáng khí và không thấm nước. Ra đời năm 1995, dù chỉ có 20 năm hoạt động nhưng Geox đã nhanh chóng trở thành thương hiệu thời trang hàng đầu thế giới, có mặt tại hơn 65 quốc gia.',
            'desc' => '<p>Geox l&agrave; một thương hiệu thời trang nổi tiếng của &Yacute;, chuy&ecirc;n sản xuất gi&agrave;y d&eacute;p, quần &aacute;o, t&uacute;i x&aacute;ch, phụ kiện cho nam, nữ, trẻ em bằng chất liệu vải tho&aacute;ng kh&iacute; v&agrave; kh&ocirc;ng thấm nước. Ra đời năm 1995, d&ugrave; chỉ c&oacute; 20 năm hoạt động nhưng Geox đ&atilde; nhanh ch&oacute;ng trở th&agrave;nh thương hiệu thời trang h&agrave;ng đầu thế giới, c&oacute; mặt tại hơn 65 quốc gia.</p>',
            'price' => '5500000',
            'created_at' => '2019-07-02 12:23:36',
            'updated_at' => '2019-07-02 12:23:36',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'THEWOLF - 62CMDL-THE CLASSIC CHELSEA BOOT- BLACK',
            'slug' => 'thewolf-62cmdl-the-classic-chelsea-boot-black',
            'pic' => '1561887865_the-classic-chelsea-boot-black.jpg',
            'spec' => '<table border="1" cellspacing="0">
                <tbody>
                    <tr>
                        <td>Thương hiệu</td>
                        <td>THEWOFT</td>
                    </tr>
                    <tr>
                        <td>Xuất xứ thương hiệu</td>
                        <td>Việt Nam</td>
                    </tr>
                    <tr>
                        <td>SKU</td>
                        <td>7088006243150</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>THE CLASSIC CHELSEA BOOT</td>
                    </tr>
                    <tr>
                        <td>M&agrave;u/mẫu</td>
                        <td>Đen Nh&aacute;m Đen</td>
                    </tr>
                    <tr>
                        <td>K&iacute;ch cỡ</td>
                        <td>39-42</td>
                    </tr>
                </tbody>
            </table>',
            'short_desc' => 'Màu sắc: Đen láng. 
            Chất liệu mũ giày: Da bò nhập khẩu. 
            Đế giày: Cao su nguyên chất chống trượt, độ bền cao. 
            Lót trong: Da dê, vải canvas cao cấp có khả năng hút ẩm cao, êm ái.',
            'desc' => '',
            'price' => '1800000',
            'created_at' => '2019-07-02 12:23:36',
            'updated_at' => '2019-07-02 12:23:36',
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Gino Rossi MTV652-R85-AGRG-9999 - Đen',
            'slug' => 'gino-rossi-mtv652-r85-agrg-9999-den',
            'pic' => '1561887940_gino-rossi-mtv652-r85-agrg-9999.jpg',
            'spec' => '',
            'short_desc' => 'Được sản xuất từ da bò Ý. 
            Đế giày đàn hồi tạo cảm giác êm ái. 
            Kiểu dáng sang trọng. 
            Đường may tỉ mỉ, chắc chắn.',
            'desc' => '',
            'price' => '6280000',
            'created_at' => '2019-07-02 12:23:36',
            'updated_at' => '2019-07-02 12:23:36',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Giày Tây Nam Vina-Giầy AGT.H0025-DE - Đen',
            'slug' => 'giay-tay-nam-vina-giay-agth0025-de-den',
            'pic' => '1561888150_vina-giay-agt-h0025-de-den.jpg',
            'spec' => '',
            'short_desc' => 'Chất liệu da cao cấp. 
            Đế cao su êm ái, nhẹ nhàng. 
            Lót da mềm mại, thoải mái. 
            Sản phẩm được bảo hành theo hệ thống cả nước.',
            'desc' => '',
            'price' => '1050000',
            'created_at' => '2019-07-02 12:23:36',
            'updated_at' => '2019-07-02 12:23:36',
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Giày Tây Nam Da Bò SUNPOLO SU111D - Đen',
            'slug' => 'giay-tay-nam-da-bo-sunpolo-su111d-den',
            'pic' => '1561888242_sunpolo-su111d.jpg',
            'spec' => '',
            'short_desc' => 'Chất liệu da bò bền đẹp. 
            Đế cao su cao 3cm chống trơn trượt. 
            Lót chân bằng da thật mềm mại cân đối. 
            Thiết kế cột dây sang trọng, lịch sự. 
            Thích hợp nơi công sở, đi chơi, dự tiệc.',
            'desc' => '',
            'price' => '680000',
            'created_at' => '2019-07-02 12:23:36',
            'updated_at' => '2019-07-02 12:23:36',
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Giày đá bóng Adidas Predator 19.3 TF xám xanh',
            'slug' => 'giay-da-bong-adidas-predator-193-tf-xam-xanh',
            'pic' => '1561889208_adidas-predator-19-3-tf.jpg',
            'spec' => '',
            'short_desc' => 'Thiết kế hiện đại với chiếc cổ chun được làm lại, giúp cho bạn có thể xỏ đôi giày chỉ trong vòng một nốt nhạc. Mặc dù vậy, Adidas Predator 2018 vẫn mang hơi thở của các thế hệ đàn anh đi trước, với đặc trưng kiểm soát bóng , kiểm soát cuộc chơi.',
            'desc' => '<p><strong>Gi&agrave;y đ&aacute; banh Adidas Predator 19.3 TF cao cổ x&aacute;m xanh c&oacute; g&igrave; đặc biệt?</strong></p>
            
            <ul>
                <li><strong>V&acirc;n nổi</strong>&nbsp;ở mũi v&agrave; m&aacute; trong của gi&agrave;y (Hỗ trợ&nbsp;<strong>kiểm so&aacute;t b&oacute;ng</strong>&nbsp;tốt)</li>
                <li><strong>Form gi&agrave;y thoải m&aacute;i</strong>&nbsp;(Mang lại sự thoải m&aacute;i kể cả với ch&acirc;n b&egrave;)</li>
                <li><strong>Đế gi&agrave;y &ecirc;m &aacute;i</strong>&nbsp;(C&oacute; lớp&nbsp;<strong>boost</strong>&nbsp;giảm chấn)</li>
                <li>M&agrave;u sắc đẹp mắt (<strong>M&agrave;u x&aacute;m xanh</strong>&nbsp;nhẹ nh&agrave;ng)</li>
                <li>Mang lại sự chắc ch&acirc;n (<strong>Kh&ocirc;ng bị mỏi ch&acirc;n</strong>&nbsp;khi chơi b&oacute;ng)</li>
            </ul>',
            'price' => '1800000',
            'created_at' => '2019-07-02 12:23:36',
            'updated_at' => '2019-07-02 12:23:36',
        ]);
    }
}
