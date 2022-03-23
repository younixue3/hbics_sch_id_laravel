<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
           ['item' =>
               json_encode(
                   ['item' =>
                       [
                           ['type' => 'title', 'content' => 'Web Dev Is The Best Profession Ever'],
                           ['type' => 'img', 'content' => 'https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80'],
                           ['type' => 'paragraph', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cum sociis natoque penatibus et magnis dis. Aenean pharetra magna ac placerat. Tellus in metus vulputate eu scelerisque felis. Pellentesque massa placerat duis ultricies lacus sed. Cras semper auctor neque vitae tempus quam pellentesque. Purus in mollis nunc sed id semper risus in hendrerit. Scelerisque eu ultrices vitae auctor eu augue. Nisl vel pretium lectus quam. Malesuada pellentesque elit eget gravida cum sociis natoque penatibus et. Mauris cursus mattis molestie a iaculis at erat pellentesque. Placerat vestibulum lectus mauris ultrices eros in cursus turpis. Nunc non blandit massa enim nec dui nunc mattis enim. Sociis natoque penatibus et magnis dis parturient montes. Eget felis eget nunc lobortis mattis aliquam faucibus purus in. Fermentum dui faucibus in ornare quam viverra orci sagittis eu. In dictum non consectetur a erat nam. Massa tempor nec feugiat nisl pretium fusce id velit ut. Faucibus a pellentesque sit amet porttitor. Montes nascetur ridiculus mus mauris vitae ultricies leo. Non curabitur gravida arcu ac tortor. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim. Feugiat nisl pretium fusce id velit. A pellentesque sit amet porttitor. Ultrices in iaculis nunc sed augue lacus viverra vitae. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Nunc id cursus metus aliquam eleifend mi in nulla. In fermentum et sollicitudin ac orci phasellus. Vulputate enim nulla aliquet porttitor. Lectus mauris ultrices eros in cursus turpis massa tincidunt dui. In ornare quam viverra orci sagittis eu. Mi quis hendrerit dolor magna eget. Neque volutpat ac tincidunt vitae semper. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Viverra justo nec ultrices dui sapien eget mi proin. Enim diam vulputate ut pharetra sit amet. Morbi tristique senectus et netus. Tincidunt tortor aliquam nulla facilisi. Pretium nibh ipsum consequat nisl vel pretium. Consectetur lorem donec massa sapien faucibus et molestie ac feugiat. Eu feugiat pretium nibh ipsum. Tempus iaculis urna id volutpat lacus. Ut faucibus pulvinar elementum integer enim neque volutpat ac. Sagittis id consectetur purus ut faucibus pulvinar. Laoreet id donec ultrices tincidunt. Tristique et egestas quis ipsum suspendisse ultrices gravida dictum. Massa eget egestas purus viverra accumsan. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum. Diam donec adipiscing tristique risus nec. Sollicitudin tempor id eu nisl nunc mi ipsum. Eget lorem dolor sed viverra ipsum nunc aliquet bibendum. Aenean et tortor at risus viverra. Mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Eget est lorem ipsum dolor sit amet consectetur. Eu feugiat pretium nibh ipsum consequat nisl vel pretium lectus. Sagittis id consectetur purus ut faucibus pulvinar. Pellentesque nec nam aliquam sem et. At erat pellentesque adipiscing commodo elit at imperdiet dui accumsan. Congue nisi vitae suscipit tellus. Etiam non quam lacus suspendisse faucibus interdum. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Facilisis leo vel fringilla est. Imperdiet sed euismod nisi porta lorem mollis aliquam ut. Turpis egestas pretium aenean pharetra magna ac. Consequat mauris nunc congue nisi vitae suscipit. Et leo duis ut diam quam. Purus viverra accumsan in nisl. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Scelerisque fermentum dui faucibus in. Faucibus in ornare quam viverra orci sagittis. Mi tempus imperdiet nulla malesuada pellentesque. Vehicula ipsum a arcu cursus vitae congue mauris rhoncus. Mattis enim ut tellus elementum sagittis. Ullamcorper eget nulla facilisi etiam dignissim diam quis. Sit amet est placerat in egestas. Bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim. Felis bibendum ut tristique et egestas. Est ante in nibh mauris cursus mattis molestie a. Nunc congue nisi vitae suscipit.'],
                       ]
                   ]
               )
           ],
            ['item' =>
                json_encode(
                    ['item' =>
                        [
                            ['type' => 'title', 'content' => 'Technology Is Everything Now! Top 10 The Best Tech'],
                            ['type' => 'img', 'content' => 'https://images.unsplash.com/photo-1604999565976-8913ad2ddb7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=160&q=80'],
                            ['type' => 'paragraph', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Habitant morbi tristique senectus et netus et malesuada fames. Et pharetra pharetra massa massa ultricies mi quis hendrerit. Leo in vitae turpis massa sed elementum. Platea dictumst vestibulum rhoncus est pellentesque elit. A arcu cursus vitae congue mauris rhoncus aenean vel elit. Morbi tristique senectus et netus et malesuada. Libero volutpat sed cras ornare arcu dui. Nunc sed blandit libero volutpat. Hendrerit gravida rutrum quisque non tellus orci ac auctor augue. Morbi tristique senectus et netus et. Eu consequat ac felis donec et odio pellentesque diam. Eget egestas purus viverra accumsan in nisl. Neque volutpat ac tincidunt vitae. Vel orci porta non pulvinar neque laoreet suspendisse. Amet commodo nulla facilisi nullam vehicula ipsum. Vitae elementum curabitur vitae nunc sed velit dignissim. Pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies. Vulputate ut pharetra sit amet aliquam id diam maecenas ultricies. Augue eget arcu dictum varius.'],
                        ]
                    ]
                )
            ],
            ['item' =>
                json_encode(
                    ['item' =>
                        [
                            ['type' => 'title', 'content' => 'How To Shut Your Boss Mouth!'],
                        ]
                    ]
                )
            ]
        ]);
    }
}
