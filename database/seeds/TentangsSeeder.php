<?php

use Illuminate\Database\Seeder;
use App\tentang;

class TentangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tentang = new tentang;
        $tentang->tentang = 
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla purus nibh, condimentum ut scelerisque tincidunt, rutrum eget ex. Donec fringilla mi nec blandit lobortis. Proin vitae mauris neque. Integer lacinia eget velit ut euismod. Nulla molestie felis nec massa blandit faucibus tincidunt vel nisi. Sed ut lorem vestibulum, consectetur risus in, feugiat diam. Sed eu enim porta lorem lobortis viverra vitae non orci. Nulla facilisi. Vivamus posuere mollis leo nec sollicitudin. Nulla eros lectus, scelerisque et ullamcorper id, varius in ipsum. Fusce imperdiet sodales purus in ultrices. Proin mattis, nibh sed efficitur porttitor, dui metus condimentum lectus, id vestibulum urna nisi vel tellus.";
        $tentang->sejarah = 
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla purus nibh, condimentum ut scelerisque tincidunt, rutrum eget ex. Donec fringilla mi nec blandit lobortis. Proin vitae mauris neque. Integer lacinia eget velit ut euismod. Nulla molestie felis nec massa blandit faucibus tincidunt vel nisi. Sed ut lorem vestibulum, consectetur risus in, feugiat diam. Sed eu enim porta lorem lobortis viverra vitae non orci. Nulla facilisi. Vivamus posuere mollis leo nec sollicitudin. Nulla eros lectus, scelerisque et ullamcorper id, varius in ipsum. Fusce imperdiet sodales purus in ultrices. Proin mattis, nibh sed efficitur porttitor, dui metus condimentum lectus, id vestibulum urna nisi vel tellus.";
        $tentang->visi =
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla purus nibh, condimentum ut scelerisque tincidunt, rutrum eget ex. Donec fringilla mi nec blandit lobortis. Proin vitae mauris neque. Integer lacinia eget velit ut euismod. Nulla molestie felis nec massa blandit faucibus tincidunt vel nisi. Sed ut lorem vestibulum, consectetur risus in, feugiat diam. Sed eu enim porta lorem lobortis viverra vitae non orci. Nulla facilisi. Vivamus posuere mollis leo nec sollicitudin. Nulla eros lectus, scelerisque et ullamcorper id, varius in ipsum. Fusce imperdiet sodales purus in ultrices. Proin mattis, nibh sed efficitur porttitor, dui metus condimentum lectus, id vestibulum urna nisi vel tellus.";
        $tentang->misi =
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla purus nibh, condimentum ut scelerisque tincidunt, rutrum eget ex. Donec fringilla mi nec blandit lobortis. Proin vitae mauris neque. Integer lacinia eget velit ut euismod. Nulla molestie felis nec massa blandit faucibus tincidunt vel nisi. Sed ut lorem vestibulum, consectetur risus in, feugiat diam. Sed eu enim porta lorem lobortis viverra vitae non orci. Nulla facilisi. Vivamus posuere mollis leo nec sollicitudin. Nulla eros lectus, scelerisque et ullamcorper id, varius in ipsum. Fusce imperdiet sodales purus in ultrices. Proin mattis, nibh sed efficitur porttitor, dui metus condimentum lectus, id vestibulum urna nisi vel tellus.";
        $tentang->tujuan =
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla purus nibh, condimentum ut scelerisque tincidunt, rutrum eget ex. Donec fringilla mi nec blandit lobortis. Proin vitae mauris neque. Integer lacinia eget velit ut euismod. Nulla molestie felis nec massa blandit faucibus tincidunt vel nisi. Sed ut lorem vestibulum, consectetur risus in, feugiat diam. Sed eu enim porta lorem lobortis viverra vitae non orci. Nulla facilisi. Vivamus posuere mollis leo nec sollicitudin. Nulla eros lectus, scelerisque et ullamcorper id, varius in ipsum. Fusce imperdiet sodales purus in ultrices. Proin mattis, nibh sed efficitur porttitor, dui metus condimentum lectus, id vestibulum urna nisi vel tellus.";
        $tentang->save();
    }
}
