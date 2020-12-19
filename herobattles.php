<?php
 $battles = array("U0001", "U0002", "U0003", "U0004", "U0005",
                  "U0006", "U0007", "U0008", "U0009", "U0010",
                  "U0011", "U0012");

 // felicia: maid mayhem
 $battles["U0001"]["name"] = "felicia: maid mayhem";
 $battles["U0001"]["id"] = "U0001";
  $battles["U0001"]["bg"] = "mapassets/levelbackgrounds/feliciabeach.png";
   $battles["U0001"]["units"][0]["name"] = "cleric";
   $battles["U0001"]["units"][0]["class"] = "troubadour";
   $battles["U0001"]["units"][0]["rating"] = 2;
   $battles["U0001"]["units"][0]["coords"] = [2, 0];
   $battles["U0001"]["units"][0]["ishero"] = false;
   $battles["U0001"]["units"][0]["movement"] = 2;
    $battles["U0001"]["units"][0]["stats"]["lvl"] = 15;
    $battles["U0001"]["units"][0]["stats"]["hp"] = 22;
    $battles["U0001"]["units"][0]["stats"]["atk"] = 22;
    $battles["U0001"]["units"][0]["stats"]["spd"] = 12;
    $battles["U0001"]["units"][0]["stats"]["def"] = 11;
    $battles["U0001"]["units"][0]["stats"]["res"] = 16;
    $battles["U0001"]["units"][0]["builds"][0] = "assault";
    $battles["U0001"]["units"][0]["builds"][1] = "";
    $battles["U0001"]["units"][0]["builds"][2] = "";
    $battles["U0001"]["units"][0]["builds"][3] = "";
    $battles["U0001"]["units"][0]["builds"][4] = "";
    // assist skill
    $battles["U0001"]["units"][0]["builds"][5] = "physic";
    //special
    $battles["U0001"]["units"][0]["builds"][6] = "";

   $battles["U0001"]["units"][1]["name"] = "axefighter";
   $battles["U0001"]["units"][1]["class"] = "fighter";
   $battles["U0001"]["units"][1]["rating"] = 2;
   $battles["U0001"]["units"][1]["coords"] = [2, 1];
   $battles["U0001"]["units"][1]["ishero"] = false;
   $battles["U0001"]["units"][1]["movement"] = 2;
     $battles["U0001"]["units"][1]["stats"]["lvl"] = 15;
     $battles["U0001"]["units"][1]["stats"]["hp"] = 27;
     $battles["U0001"]["units"][1]["stats"]["atk"] = 22;
     $battles["U0001"]["units"][1]["stats"]["spd"] = 14;
     $battles["U0001"]["units"][1]["stats"]["def"] = 14;
     $battles["U0001"]["units"][1]["stats"]["res"] = 10;
     $battles["U0001"]["units"][1]["builds"][0] = "steel axe";
     $battles["U0001"]["units"][1]["builds"][1] = "";
     $battles["U0001"]["units"][1]["builds"][2] = "";
     $battles["U0001"]["units"][1]["builds"][3] = "";
     $battles["U0001"]["units"][1]["builds"][4] = "";
     // assist skill
     $battles["U0001"]["units"][1]["builds"][5] = "";
     //special
     $battles["U0001"]["units"][1]["builds"][6] = "";

   $battles["U0001"]["units"][2]["name"] = "felicia";
   $battles["U0001"]["units"][2]["class"] = "thief";
   $battles["U0001"]["units"][2]["rating"] = 2;
   $battles["U0001"]["units"][2]["coords"] = [2, 2];
   $battles["U0001"]["units"][2]["ishero"] = true;
   $battles["U0001"]["units"][2]["movement"] = 2;
     $battles["U0001"]["units"][2]["stats"]["lvl"] = 15;
     $battles["U0001"]["units"][2]["stats"]["hp"] = 20;
     $battles["U0001"]["units"][2]["stats"]["atk"] = 16;
     $battles["U0001"]["units"][2]["stats"]["spd"] = 18;
     $battles["U0001"]["units"][2]["stats"]["def"] = 7;
     $battles["U0001"]["units"][2]["stats"]["res"] = 16;
     $battles["U0001"]["units"][2]["builds"][0] = "steel dagger";
     $battles["U0001"]["units"][2]["builds"][1] = "";
     $battles["U0001"]["units"][2]["builds"][2] = "";
     $battles["U0001"]["units"][2]["builds"][3] = "breath of life 2";
     $battles["U0001"]["units"][2]["builds"][4] = "";
     // assist skill
     $battles["U0001"]["units"][2]["builds"][5] = "";
     //special
     $battles["U0001"]["units"][2]["builds"][6] = "";

   $battles["U0001"]["units"][3]["name"] = "swordknight";
   $battles["U0001"]["units"][3]["class"] = "knight";
   $battles["U0001"]["units"][3]["rating"] = 2;
   $battles["U0001"]["units"][3]["coords"] = [2, 3];
   $battles["U0001"]["units"][3]["ishero"] = false;
   $battles["U0001"]["units"][3]["movement"] = 2;
     $battles["U0001"]["units"][3]["stats"]["lvl"] = 15;
     $battles["U0001"]["units"][3]["stats"]["hp"] = 34;
     $battles["U0001"]["units"][3]["stats"]["atk"] = 26;
     $battles["U0001"]["units"][3]["stats"]["spd"] = 6;
     $battles["U0001"]["units"][3]["stats"]["def"] = 20;
     $battles["U0001"]["units"][3]["stats"]["res"] = 8;
     $battles["U0001"]["units"][3]["builds"][0] = "steel sword";
     $battles["U0001"]["units"][3]["builds"][1] = "";
     $battles["U0001"]["units"][3]["builds"][2] = "";
     $battles["U0001"]["units"][3]["builds"][3] = "";
     $battles["U0001"]["units"][3]["builds"][4] = "";
     // assist skill
     $battles["U0001"]["units"][3]["builds"][5] = "swap";
     //special
     $battles["U0001"]["units"][3]["builds"][6] = "";

 // sophia: nabata prophet
 $battles["U0005"]["name"] = "sophia: nabata prophet";
 $battles["U0005"]["id"] = "U0005";
  $battles["U0005"]["bg"] = "mapassets/levelbackgrounds/sophiadesert.png";
   $battles["U0005"]["units"][0]["name"] = "sophia";
   $battles["U0005"]["units"][0]["class"] = "mage";
   $battles["U0005"]["units"][0]["rating"] = 2;
   $battles["U0005"]["units"][0]["coords"] = [5, 6];
   $battles["U0005"]["units"][0]["ishero"] = true;
   $battles["U0005"]["units"][0]["movement"] = 2;
    $battles["U0005"]["units"][0]["stats"]["lvl"] = 15;
    $battles["U0005"]["units"][0]["stats"]["hp"] = 24;
    $battles["U0005"]["units"][0]["stats"]["atk"] = 22;
    $battles["U0005"]["units"][0]["stats"]["spd"] = 8;
    $battles["U0005"]["units"][0]["stats"]["def"] = 12;
    $battles["U0005"]["units"][0]["stats"]["res"] = 13;
    $battles["U0005"]["units"][0]["builds"][0] = "ruin";
    $battles["U0005"]["units"][0]["builds"][1] = "warding blow 2";
    $battles["U0005"]["units"][0]["builds"][2] = "";
    $battles["U0005"]["units"][0]["builds"][3] = "";
    $battles["U0005"]["units"][0]["builds"][4] = "";
    // assist skill
    $battles["U0005"]["units"][0]["builds"][5] = "";
    //special
    $battles["U0005"]["units"][0]["builds"][6] = "";

   $battles["U0005"]["units"][1]["name"] = "redmage";
   $battles["U0005"]["units"][1]["class"] = "mage";
   $battles["U0005"]["units"][1]["rating"] = 2;
   $battles["U0005"]["units"][1]["coords"] = [5, 0];
   $battles["U0005"]["units"][1]["ishero"] = false;
   $battles["U0005"]["units"][1]["movement"] = 2;
     $battles["U0005"]["units"][1]["stats"]["lvl"] = 15;
     $battles["U0005"]["units"][1]["stats"]["hp"] = 23;
     $battles["U0005"]["units"][1]["stats"]["atk"] = 20;
     $battles["U0005"]["units"][1]["stats"]["spd"] = 15;
     $battles["U0005"]["units"][1]["stats"]["def"] = 9;
     $battles["U0005"]["units"][1]["stats"]["res"] = 12;
     $battles["U0005"]["units"][1]["builds"][0] = "elfire";
     $battles["U0005"]["units"][1]["builds"][1] = "";
     $battles["U0005"]["units"][1]["builds"][2] = "";
     $battles["U0005"]["units"][1]["builds"][3] = "";
     $battles["U0005"]["units"][1]["builds"][4] = "";
     // assist skill
     $battles["U0005"]["units"][1]["builds"][5] = "";
     //special
     $battles["U0005"]["units"][1]["builds"][6] = "";

   $battles["U0005"]["units"][2]["name"] = "greenmage";
   $battles["U0005"]["units"][2]["class"] = "mage";
   $battles["U0005"]["units"][2]["rating"] = 2;
   $battles["U0005"]["units"][2]["coords"] = [5, 2];
   $battles["U0005"]["units"][2]["ishero"] = false;
   $battles["U0005"]["units"][2]["movement"] = 2;
     $battles["U0005"]["units"][2]["stats"]["lvl"] = 15;
     $battles["U0005"]["units"][2]["stats"]["hp"] = 23;
     $battles["U0005"]["units"][2]["stats"]["atk"] = 20;
     $battles["U0005"]["units"][2]["stats"]["spd"] = 15;
     $battles["U0005"]["units"][2]["stats"]["def"] = 9;
     $battles["U0005"]["units"][2]["stats"]["res"] = 12;
     $battles["U0005"]["units"][2]["builds"][0] = "elwind";
     $battles["U0005"]["units"][2]["builds"][1] = "";
     $battles["U0005"]["units"][2]["builds"][2] = "";
     $battles["U0005"]["units"][2]["builds"][3] = "";
     $battles["U0005"]["units"][2]["builds"][4] = "";
     // assist skill
     $battles["U0005"]["units"][2]["builds"][5] = "";
     //special
     $battles["U0005"]["units"][2]["builds"][6] = "";

   $battles["U0005"]["units"][3]["name"] = "thief";
   $battles["U0005"]["units"][3]["class"] = "thief";
   $battles["U0005"]["units"][3]["rating"] = 2;
   $battles["U0005"]["units"][3]["coords"] = [5, 4];
   $battles["U0005"]["units"][3]["ishero"] = false;
   $battles["U0005"]["units"][3]["movement"] = 2;
     $battles["U0005"]["units"][3]["stats"]["lvl"] = 15;
     $battles["U0005"]["units"][3]["stats"]["hp"] = 22;
     $battles["U0005"]["units"][3]["stats"]["atk"] = 17;
     $battles["U0005"]["units"][3]["stats"]["spd"] = 18;
     $battles["U0005"]["units"][3]["stats"]["def"] = 6;
     $battles["U0005"]["units"][3]["stats"]["res"] = 15;
     $battles["U0005"]["units"][3]["builds"][0] = "steel dagger";
     $battles["U0005"]["units"][3]["builds"][1] = "";
     $battles["U0005"]["units"][3]["builds"][2] = "";
     $battles["U0005"]["units"][3]["builds"][3] = "";
     $battles["U0005"]["units"][3]["builds"][4] = "";
     // assist skill
     $battles["U0005"]["units"][3]["builds"][5] = "";
     //special
     $battles["U0005"]["units"][3]["builds"][6] = "";


 // wrys: kindly priest
 $battles["U0002"]["name"] = "wrys: kindly priest";
 $battles["U0002"]["id"] = "U0002";
  $battles["U0002"]["bg"] = "mapassets/levelbackgrounds/wrysland.png";
   $battles["U0002"]["units"][0]["name"] = "wrys";
   $battles["U0002"]["units"][0]["class"] = "cleric";
   $battles["U0002"]["units"][0]["rating"] = 3;
   $battles["U0002"]["units"][0]["coords"] = [3, 1];
   $battles["U0002"]["units"][0]["ishero"] = true;
   $battles["U0002"]["units"][0]["movement"] = 2;
    $battles["U0002"]["units"][0]["stats"]["lvl"] = 15;
    $battles["U0002"]["units"][0]["stats"]["hp"] = 25;
    $battles["U0002"]["units"][0]["stats"]["atk"] = 10;
    $battles["U0002"]["units"][0]["stats"]["spd"] = 11;
    $battles["U0002"]["units"][0]["stats"]["def"] = 10;
    $battles["U0002"]["units"][0]["stats"]["res"] = 17;
    $battles["U0002"]["units"][0]["builds"][0] = "";
    $battles["U0002"]["units"][0]["builds"][1] = "";
    $battles["U0002"]["units"][0]["builds"][2] = "";
    $battles["U0002"]["units"][0]["builds"][3] = "";
    $battles["U0002"]["units"][0]["builds"][4] = "";
    // assist skill
    $battles["U0002"]["units"][0]["builds"][5] = "reconcile";
    //special
    $battles["U0002"]["units"][0]["builds"][6] = "";

   $battles["U0002"]["units"][1]["name"] = "axeknight";
   $battles["U0002"]["units"][1]["class"] = "knight";
   $battles["U0002"]["units"][1]["rating"] = 3;
   $battles["U0002"]["units"][1]["coords"] = [1, 1];
   $battles["U0002"]["units"][1]["ishero"] = false;
   $battles["U0002"]["units"][1]["movement"] = 1;
     $battles["U0002"]["units"][1]["stats"]["lvl"] = 15;
     $battles["U0002"]["units"][1]["stats"]["hp"] = 34;
     $battles["U0002"]["units"][1]["stats"]["atk"] = 26;
     $battles["U0002"]["units"][1]["stats"]["spd"] = 6;
     $battles["U0002"]["units"][1]["stats"]["def"] = 20;
     $battles["U0002"]["units"][1]["stats"]["res"] = 9;
     $battles["U0002"]["units"][1]["builds"][0] = "iron axe";
     $battles["U0002"]["units"][1]["builds"][1] = "";
     $battles["U0002"]["units"][1]["builds"][2] = "";
     $battles["U0002"]["units"][1]["builds"][3] = "";
     $battles["U0002"]["units"][1]["builds"][4] = "";
     // assist skill
     $battles["U0002"]["units"][1]["builds"][5] = "";
     //special
     $battles["U0002"]["units"][1]["builds"][6] = "";

   $battles["U0002"]["units"][2]["name"] = "swordcavelier";
   $battles["U0002"]["units"][2]["class"] = "cavelier";
   $battles["U0002"]["units"][2]["rating"] = 3;
   $battles["U0002"]["units"][2]["coords"] = [5, 2];
   $battles["U0002"]["units"][2]["ishero"] = false;
   $battles["U0002"]["units"][2]["movement"] = 3;
     $battles["U0002"]["units"][2]["stats"]["lvl"] = 15;
     $battles["U0002"]["units"][2]["stats"]["hp"] = 25;
     $battles["U0002"]["units"][2]["stats"]["atk"] = 23;
     $battles["U0002"]["units"][2]["stats"]["spd"] = 10;
     $battles["U0002"]["units"][2]["stats"]["def"] = 11;
     $battles["U0002"]["units"][2]["stats"]["res"] = 14;
     $battles["U0002"]["units"][2]["builds"][0] = "iron sword";
     $battles["U0002"]["units"][2]["builds"][1] = "";
     $battles["U0002"]["units"][2]["builds"][2] = "";
     $battles["U0002"]["units"][2]["builds"][3] = "";
     $battles["U0002"]["units"][2]["builds"][4] = "";
     // assist skill
     $battles["U0002"]["units"][2]["builds"][5] = "";
     //special
     $battles["U0002"]["units"][2]["builds"][6] = "";

   $battles["U0002"]["units"][3]["name"] = "axecavelier";
   $battles["U0002"]["units"][3]["class"] = "cavelier";
   $battles["U0002"]["units"][3]["rating"] = 3;
   $battles["U0002"]["units"][3]["coords"] = [5, 6];
   $battles["U0002"]["units"][3]["ishero"] = false;
   $battles["U0002"]["units"][3]["movement"] = 3;
     $battles["U0002"]["units"][3]["stats"]["lvl"] = 15;
     $battles["U0002"]["units"][3]["stats"]["hp"] = 25;
     $battles["U0002"]["units"][3]["stats"]["atk"] = 23;
     $battles["U0002"]["units"][3]["stats"]["spd"] = 10;
     $battles["U0002"]["units"][3]["stats"]["def"] = 11;
     $battles["U0002"]["units"][3]["stats"]["res"] = 14;
     $battles["U0002"]["units"][3]["builds"][0] = "iron axe";
     $battles["U0002"]["units"][3]["builds"][1] = "";
     $battles["U0002"]["units"][3]["builds"][2] = "";
     $battles["U0002"]["units"][3]["builds"][3] = "";
     $battles["U0002"]["units"][3]["builds"][4] = "";
     // assist skill
     $battles["U0002"]["units"][3]["builds"][5] = "";
     //special
     $battles["U0002"]["units"][3]["builds"][6] = "";

 // olivia: blushing beauty
 $battles["U0003"]["name"] = "olivia: blushing beauty";
 $battles["U0003"]["id"] = "U0003";
  $battles["U0003"]["bg"] = "mapassets/levelbackgrounds/oliviariver.png";
   $battles["U0003"]["units"][0]["name"] = "olivia";
   $battles["U0003"]["units"][0]["class"] = "sword";
   $battles["U0003"]["units"][0]["rating"] = 3;
   $battles["U0003"]["units"][0]["coords"] = [5, 4];
   $battles["U0003"]["units"][0]["ishero"] = true;
   $battles["U0003"]["units"][0]["movement"] = 2;
    $battles["U0003"]["units"][0]["stats"]["lvl"] = 15;
    $battles["U0003"]["units"][0]["stats"]["hp"] = 22;
    $battles["U0003"]["units"][0]["stats"]["atk"] = 20;
    $battles["U0003"]["units"][0]["stats"]["spd"] = 14;
    $battles["U0003"]["units"][0]["stats"]["def"] = 11;
    $battles["U0003"]["units"][0]["stats"]["res"] = 10;
    $battles["U0003"]["units"][0]["builds"][0] = "iron sword";
    $battles["U0003"]["units"][0]["builds"][1] = "";
    $battles["U0003"]["units"][0]["builds"][2] = "";
    $battles["U0003"]["units"][0]["builds"][3] = "hone atk 2";
    $battles["U0003"]["units"][0]["builds"][4] = "";
    // assist skill
    $battles["U0003"]["units"][0]["builds"][5] = "dance";
    //special
    $battles["U0003"]["units"][0]["builds"][6] = "";

   $battles["U0003"]["units"][1]["name"] = "bluecavelier";
   $battles["U0003"]["units"][1]["class"] = "cavelier";
   $battles["U0003"]["units"][1]["rating"] = 3;
   $battles["U0003"]["units"][1]["coords"] = [5, 7];
   $battles["U0003"]["units"][1]["ishero"] = false;
   $battles["U0003"]["units"][1]["movement"] = 3;
     $battles["U0003"]["units"][1]["stats"]["lvl"] = 15;
     $battles["U0003"]["units"][1]["stats"]["hp"] = 21;
     $battles["U0003"]["units"][1]["stats"]["atk"] = 22;
     $battles["U0003"]["units"][1]["stats"]["spd"] = 11;
     $battles["U0003"]["units"][1]["stats"]["def"] = 7;
     $battles["U0003"]["units"][1]["stats"]["res"] = 9;
     $battles["U0003"]["units"][1]["builds"][0] = "elthunder";
     $battles["U0003"]["units"][1]["builds"][1] = "";
     $battles["U0003"]["units"][1]["builds"][2] = "";
     $battles["U0003"]["units"][1]["builds"][3] = "";
     $battles["U0003"]["units"][1]["builds"][4] = "";
     // assist skill
     $battles["U0003"]["units"][1]["builds"][5] = "";
     //special
     $battles["U0003"]["units"][1]["builds"][6] = "";

   $battles["U0003"]["units"][2]["name"] = "axefighter";
   $battles["U0003"]["units"][2]["class"] = "fighter";
   $battles["U0003"]["units"][2]["rating"] = 3;
   $battles["U0003"]["units"][2]["coords"] = [4, 3];
   $battles["U0003"]["units"][2]["ishero"] = false;
   $battles["U0003"]["units"][2]["movement"] = 2;
     $battles["U0003"]["units"][2]["stats"]["lvl"] = 15;
     $battles["U0003"]["units"][2]["stats"]["hp"] = 27;
     $battles["U0003"]["units"][2]["stats"]["atk"] = 22;
     $battles["U0003"]["units"][2]["stats"]["spd"] = 14;
     $battles["U0003"]["units"][2]["stats"]["def"] = 14;
     $battles["U0003"]["units"][2]["stats"]["res"] = 10;
     $battles["U0003"]["units"][2]["builds"][0] = "iron axe";
     $battles["U0003"]["units"][2]["builds"][1] = "";
     $battles["U0003"]["units"][2]["builds"][2] = "";
     $battles["U0003"]["units"][2]["builds"][3] = "";
     $battles["U0003"]["units"][2]["builds"][4] = "";
     // assist skill
     $battles["U0003"]["units"][2]["builds"][5] = "";
     //special
     $battles["U0003"]["units"][2]["builds"][6] = "";

   $battles["U0003"]["units"][3]["name"] = "swordflier";
   $battles["U0003"]["units"][3]["class"] = "flier";
   $battles["U0003"]["units"][3]["rating"] = 3;
   $battles["U0003"]["units"][3]["coords"] = [4, 0];
   $battles["U0003"]["units"][3]["ishero"] = false;
   $battles["U0003"]["units"][3]["movement"] = 2;
     $battles["U0003"]["units"][3]["stats"]["lvl"] = 15;
     $battles["U0003"]["units"][3]["stats"]["hp"] = 23;
     $battles["U0003"]["units"][3]["stats"]["atk"] = 20;
     $battles["U0003"]["units"][3]["stats"]["spd"] = 16;
     $battles["U0003"]["units"][3]["stats"]["def"] = 9;
     $battles["U0003"]["units"][3]["stats"]["res"] = 17;
     $battles["U0003"]["units"][3]["builds"][0] = "iron sword";
     $battles["U0003"]["units"][3]["builds"][1] = "";
     $battles["U0003"]["units"][3]["builds"][2] = "";
     $battles["U0003"]["units"][3]["builds"][3] = "";
     $battles["U0003"]["units"][3]["builds"][4] = "";
     // assist skill
     $battles["U0003"]["units"][3]["builds"][5] = "";
     //special
     $battles["U0003"]["units"][3]["builds"][6] = "";

 // stahl: viridianknight
 $battles["U0004"]["name"] = "stahl: viridianknight";
 $battles["U0004"]["id"] = "U0004";
  $battles["U0004"]["bg"] = "mapassets/levelbackgrounds/stahlforest.png";
   $battles["U0004"]["units"][0]["name"] = "stahl";
   $battles["U0004"]["units"][0]["class"] = "cavelier";
   $battles["U0004"]["units"][0]["rating"] = 3;
   $battles["U0004"]["units"][0]["coords"] = [1, 0];
   $battles["U0004"]["units"][0]["ishero"] = true;
   $battles["U0004"]["units"][0]["movement"] = 3;
    $battles["U0004"]["units"][0]["stats"]["lvl"] = 15;
    $battles["U0004"]["units"][0]["stats"]["hp"] = 26;
    $battles["U0004"]["units"][0]["stats"]["atk"] = 22;
    $battles["U0004"]["units"][0]["stats"]["spd"] = 12;
    $battles["U0004"]["units"][0]["stats"]["def"] = 14;
    $battles["U0004"]["units"][0]["stats"]["res"] = 10;
    $battles["U0004"]["units"][0]["builds"][0] = "steel sword";
    $battles["U0004"]["units"][0]["builds"][1] = "";
    $battles["U0004"]["units"][0]["builds"][2] = "";
    $battles["U0004"]["units"][0]["builds"][3] = "";
    $battles["U0004"]["units"][0]["builds"][4] = "";
    // assist skill
    $battles["U0004"]["units"][0]["builds"][5] = "swap";
    //special
    $battles["U0004"]["units"][0]["builds"][6] = "";

   $battles["U0004"]["units"][1]["name"] = "lancecavelier";
   $battles["U0004"]["units"][1]["class"] = "cavelier";
   $battles["U0004"]["units"][1]["rating"] = 3;
   $battles["U0004"]["units"][1]["coords"] = [2, 0];
   $battles["U0004"]["units"][1]["ishero"] = false;
   $battles["U0004"]["units"][1]["movement"] = 3;
     $battles["U0004"]["units"][1]["stats"]["lvl"] = 15;
     $battles["U0004"]["units"][1]["stats"]["hp"] = 25;
     $battles["U0004"]["units"][1]["stats"]["atk"] = 23;
     $battles["U0004"]["units"][1]["stats"]["spd"] = 10;
     $battles["U0004"]["units"][1]["stats"]["def"] = 11;
     $battles["U0004"]["units"][1]["stats"]["res"] = 14;
     $battles["U0004"]["units"][1]["builds"][0] = "steel lance";
     $battles["U0004"]["units"][1]["builds"][1] = "";
     $battles["U0004"]["units"][1]["builds"][2] = "";
     $battles["U0004"]["units"][1]["builds"][3] = "";
     $battles["U0004"]["units"][1]["builds"][4] = "";
     // assist skill
     $battles["U0004"]["units"][1]["builds"][5] = "swap";
     //special
     $battles["U0004"]["units"][1]["builds"][6] = "";

   $battles["U0004"]["units"][2]["name"] = "axecavelier";
   $battles["U0004"]["units"][2]["class"] = "cavelier";
   $battles["U0004"]["units"][2]["rating"] = 3;
   $battles["U0004"]["units"][2]["coords"] = [3, 0];
   $battles["U0004"]["units"][2]["ishero"] = false;
   $battles["U0004"]["units"][2]["movement"] = 3;
     $battles["U0004"]["units"][2]["stats"]["lvl"] = 15;
     $battles["U0004"]["units"][2]["stats"]["hp"] = 25;
     $battles["U0004"]["units"][2]["stats"]["atk"] = 23;
     $battles["U0004"]["units"][2]["stats"]["spd"] = 10;
     $battles["U0004"]["units"][2]["stats"]["def"] = 11;
     $battles["U0004"]["units"][2]["stats"]["res"] = 14;
     $battles["U0004"]["units"][2]["builds"][0] = "steel axe";
     $battles["U0004"]["units"][2]["builds"][1] = "";
     $battles["U0004"]["units"][2]["builds"][2] = "";
     $battles["U0004"]["units"][2]["builds"][3] = "";
     $battles["U0004"]["units"][2]["builds"][4] = "";
     // assist skill
     $battles["U0004"]["units"][2]["builds"][5] = "swap";
     //special
     $battles["U0004"]["units"][2]["builds"][6] = "";

   $battles["U0004"]["units"][3]["name"] = "bowcavelier";
   $battles["U0004"]["units"][3]["class"] = "cavelier";
   $battles["U0004"]["units"][3]["rating"] = 3;
   $battles["U0004"]["units"][3]["coords"] = [4, 0];
   $battles["U0004"]["units"][3]["ishero"] = false;
   $battles["U0004"]["units"][3]["movement"] = 3;
     $battles["U0004"]["units"][3]["stats"]["lvl"] = 15;
     $battles["U0004"]["units"][3]["stats"]["hp"] = 24;
     $battles["U0004"]["units"][3]["stats"]["atk"] = 22;
     $battles["U0004"]["units"][3]["stats"]["spd"] = 10;
     $battles["U0004"]["units"][3]["stats"]["def"] = 10;
     $battles["U0004"]["units"][3]["stats"]["res"] = 11;
     $battles["U0004"]["units"][3]["builds"][0] = "steel bow";
     $battles["U0004"]["units"][3]["builds"][1] = "";
     $battles["U0004"]["units"][3]["builds"][2] = "";
     $battles["U0004"]["units"][3]["builds"][3] = "";
     $battles["U0004"]["units"][3]["builds"][4] = "";
     // assist skill
     $battles["U0004"]["units"][3]["builds"][5] = "";
     //special
     $battles["U0004"]["units"][3]["builds"][6] = "";

     // // wrys: kindly priest
     // $battles["U0002"]["name"] = "wrys: kindly priest";
     // $battles["U0002"]["id"] = "U0002";
     //  $battles["U0002"]["bg"] = "mapassets/levelbackgrounds/wrysland.png";
     //   $battles["U0002"]["units"][0]["name"] = "wrys";
     //   $battles["U0002"]["units"][0]["rating"] = 2;
     //    $battles["U0002"]["units"][0]["stats"]["lvl"] = 5;
     //    $battles["U0002"]["units"][0]["stats"]["hp"] = 18;
     //    $battles["U0002"]["units"][0]["stats"]["atk"] = 5;
     //    $battles["U0002"]["units"][0]["stats"]["spd"] = 6;
     //    $battles["U0002"]["units"][0]["stats"]["def"] = 4;
     //    $battles["U0002"]["units"][0]["stats"]["res"] = 11;
     //    $battles["U0002"]["units"][0]["builds"][0] = "";
     //    $battles["U0002"]["units"][0]["builds"][1] = "";
     //    $battles["U0002"]["units"][0]["builds"][2] = "";
     //    $battles["U0002"]["units"][0]["builds"][3] = "";
     //    $battles["U0002"]["units"][0]["builds"][4] = "";
     //    // assist skill
     //    $battles["U0002"]["units"][0]["builds"][5] = "reconcile";
     //    //special
     //    $battles["U0002"]["units"][0]["builds"][6] = "";
     //
     //   $battles["U0002"]["units"][1]["name"] = "axeknight";
     //   $battles["U0002"]["units"][1]["rating"] = 2;
     //     $battles["U0002"]["units"][1]["stats"]["lvl"] = 5;
     //     $battles["U0002"]["units"][1]["stats"]["hp"] = 26;
     //     $battles["U0002"]["units"][1]["stats"]["atk"] = 17;
     //     $battles["U0002"]["units"][1]["stats"]["spd"] = 2;
     //     $battles["U0002"]["units"][1]["stats"]["def"] = 13;
     //     $battles["U0002"]["units"][1]["stats"]["res"] = 3;
     //     $battles["U0002"]["units"][1]["builds"][0] = "iron axe";
     //     $battles["U0002"]["units"][1]["builds"][1] = "";
     //     $battles["U0002"]["units"][1]["builds"][2] = "";
     //     $battles["U0002"]["units"][1]["builds"][3] = "";
     //     $battles["U0002"]["units"][1]["builds"][4] = "";
     //     // assist skill
     //     $battles["U0002"]["units"][1]["builds"][5] = "";
     //     //special
     //     $battles["U0002"]["units"][1]["builds"][6] = "";
     //
     //   $battles["U0002"]["units"][2]["name"] = "swordcavelier";
     //   $battles["U0002"]["units"][2]["rating"] = 2;
     //     $battles["U0002"]["units"][2]["stats"]["lvl"] = 5;
     //     $battles["U0002"]["units"][2]["stats"]["hp"] = 19;
     //     $battles["U0002"]["units"][2]["stats"]["atk"] = 15;
     //     $battles["U0002"]["units"][2]["stats"]["spd"] = 5;
     //     $battles["U0002"]["units"][2]["stats"]["def"] = 6;
     //     $battles["U0002"]["units"][2]["stats"]["res"] = 9;
     //     $battles["U0002"]["units"][2]["builds"][0] = "iron sword";
     //     $battles["U0002"]["units"][2]["builds"][1] = "";
     //     $battles["U0002"]["units"][2]["builds"][2] = "";
     //     $battles["U0002"]["units"][2]["builds"][3] = "";
     //     $battles["U0002"]["units"][2]["builds"][4] = "";
     //     // assist skill
     //     $battles["U0002"]["units"][2]["builds"][5] = "";
     //     //special
     //     $battles["U0002"]["units"][2]["builds"][6] = "";
     //
     //   $battles["U0002"]["units"][3]["name"] = "axecavelier";
     //   $battles["U0002"]["units"][3]["rating"] = 2;
     //     $battles["U0002"]["units"][3]["stats"]["lvl"] = 5;
     //     $battles["U0002"]["units"][3]["stats"]["hp"] = 19;
     //     $battles["U0002"]["units"][3]["stats"]["atk"] = 16;
     //     $battles["U0002"]["units"][3]["stats"]["spd"] = 5;
     //     $battles["U0002"]["units"][3]["stats"]["def"] = 6;
     //     $battles["U0002"]["units"][3]["stats"]["res"] = 9;
     //     $battles["U0002"]["units"][3]["builds"][0] = "iron axe";
     //     $battles["U0002"]["units"][3]["builds"][1] = "";
     //     $battles["U0002"]["units"][3]["builds"][2] = "";
     //     $battles["U0002"]["units"][3]["builds"][3] = "";
     //     $battles["U0002"]["units"][3]["builds"][4] = "";
     //     // assist skill
     //     $battles["U0002"]["units"][3]["builds"][5] = "";
     //     //special
     //     $battles["U0002"]["units"][3]["builds"][6] = "";

   // virion: elite archer
   $battles["U0006"]["name"] = "virion: elite archer";
   $battles["U0006"]["id"] = "U0006";
    $battles["U0006"]["bg"] = "mapassets/levelbackgrounds/virionfort.png";
     $battles["U0006"]["units"][0]["name"] = "virion";
     $battles["U0006"]["units"][0]["class"] = "archer";
     $battles["U0006"]["units"][0]["rating"] = 3;
     $battles["U0006"]["units"][0]["coords"] = [2, 3];
     $battles["U0006"]["units"][0]["ishero"] = true;
     $battles["U0006"]["units"][0]["movement"] = 2;
      $battles["U0006"]["units"][0]["stats"]["lvl"] = 15;
      $battles["U0006"]["units"][0]["stats"]["hp"] = 27;
      $battles["U0006"]["units"][0]["stats"]["atk"] = 20;
      $battles["U0006"]["units"][0]["stats"]["spd"] = 14;
      $battles["U0006"]["units"][0]["stats"]["def"] = 12;
      $battles["U0006"]["units"][0]["stats"]["res"] = 6;
      $battles["U0006"]["units"][0]["builds"][0] = "steel bow";
      $battles["U0006"]["units"][0]["builds"][1] = "";
      $battles["U0006"]["units"][0]["builds"][2] = "seal spd 2";
      $battles["U0006"]["units"][0]["builds"][3] = "";
      $battles["U0006"]["units"][0]["builds"][4] = "";
      // assist skill
      $battles["U0006"]["units"][0]["builds"][5] = "";
      //special
      $battles["U0006"]["units"][0]["builds"][6] = "";

     $battles["U0006"]["units"][1]["name"] = "redmage";
     $battles["U0006"]["units"][1]["class"] = "mage";
     $battles["U0006"]["units"][1]["rating"] = 3;
     $battles["U0006"]["units"][1]["coords"] = [2, 4];
     $battles["U0006"]["units"][1]["ishero"] = false;
     $battles["U0006"]["units"][1]["movement"] = 2;
       $battles["U0006"]["units"][1]["stats"]["lvl"] = 15;
       $battles["U0006"]["units"][1]["stats"]["hp"] = 23;
       $battles["U0006"]["units"][1]["stats"]["atk"] = 20;
       $battles["U0006"]["units"][1]["stats"]["spd"] = 15;
       $battles["U0006"]["units"][1]["stats"]["def"] = 9;
       $battles["U0006"]["units"][1]["stats"]["res"] = 12;
       $battles["U0006"]["units"][1]["builds"][0] = "elfire";
       $battles["U0006"]["units"][1]["builds"][1] = "";
       $battles["U0006"]["units"][1]["builds"][2] = "";
       $battles["U0006"]["units"][1]["builds"][3] = "";
       $battles["U0006"]["units"][1]["builds"][4] = "";
       // assist skill
       $battles["U0006"]["units"][1]["builds"][5] = "";
       //special
       $battles["U0006"]["units"][1]["builds"][6] = "";

     $battles["U0006"]["units"][2]["name"] = "cleric";
     $battles["U0006"]["units"][2]["class"] = "troubadour";
     $battles["U0006"]["units"][2]["rating"] = 3;
     $battles["U0006"]["units"][2]["coords"] = [3, 3];
     $battles["U0006"]["units"][2]["ishero"] = false;
     $battles["U0006"]["units"][2]["movement"] = 2;
       $battles["U0006"]["units"][2]["stats"]["lvl"] = 15;
       $battles["U0006"]["units"][2]["stats"]["hp"] = 22;
       $battles["U0006"]["units"][2]["stats"]["atk"] = 22;
       $battles["U0006"]["units"][2]["stats"]["spd"] = 12;
       $battles["U0006"]["units"][2]["stats"]["def"] = 11;
       $battles["U0006"]["units"][2]["stats"]["res"] = 16;
       $battles["U0006"]["units"][2]["builds"][0] = "assault";
       $battles["U0006"]["units"][2]["builds"][1] = "";
       $battles["U0006"]["units"][2]["builds"][2] = "";
       $battles["U0006"]["units"][2]["builds"][3] = "";
       $battles["U0006"]["units"][2]["builds"][4] = "";
       // assist skill
       $battles["U0006"]["units"][2]["builds"][5] = "mend";
       //special
       $battles["U0006"]["units"][2]["builds"][6] = "";

     $battles["U0006"]["units"][3]["name"] = "thief";
     $battles["U0006"]["units"][3]["class"] = "thief";
     $battles["U0006"]["units"][3]["rating"] = 3;
     $battles["U0006"]["units"][3]["coords"] = [3, 4];
     $battles["U0006"]["units"][3]["ishero"] = false;
     $battles["U0006"]["units"][3]["movement"] = 2;
       $battles["U0006"]["units"][3]["stats"]["lvl"] = 15;
       $battles["U0006"]["units"][3]["stats"]["hp"] = 22;
       $battles["U0006"]["units"][3]["stats"]["atk"] = 17;
       $battles["U0006"]["units"][3]["stats"]["spd"] = 18;
       $battles["U0006"]["units"][3]["stats"]["def"] = 6;
       $battles["U0006"]["units"][3]["stats"]["res"] = 15;
       $battles["U0006"]["units"][3]["builds"][0] = "steel dagger";
       $battles["U0006"]["units"][3]["builds"][1] = "";
       $battles["U0006"]["units"][3]["builds"][2] = "";
       $battles["U0006"]["units"][3]["builds"][3] = "";
       $battles["U0006"]["units"][3]["builds"][4] = "";
       // assist skill
       $battles["U0006"]["units"][3]["builds"][5] = "";
       //special
       $battles["U0006"]["units"][3]["builds"][6] = "";

   // hana: focused samurai
   $battles["U0007"]["name"] = "hana: focused samurai";
   $battles["U0007"]["id"] = "U0007";
    $battles["U0007"]["bg"] = "mapassets/levelbackgrounds/hanadojo.png";
     $battles["U0007"]["units"][0]["name"] = "hana";
     $battles["U0007"]["units"][0]["class"] = "fighter";
     $battles["U0007"]["units"][0]["rating"] = 3;
     $battles["U0007"]["units"][0]["coords"] = [5, 0];
     $battles["U0007"]["units"][0]["ishero"] = true;
     $battles["U0007"]["units"][0]["movement"] = 2;
      $battles["U0007"]["units"][0]["stats"]["lvl"] = 15;
      $battles["U0007"]["units"][0]["stats"]["hp"] = 23;
      $battles["U0007"]["units"][0]["stats"]["atk"] = 24;
      $battles["U0007"]["units"][0]["stats"]["spd"] = 17;
      $battles["U0007"]["units"][0]["stats"]["def"] = 11;
      $battles["U0007"]["units"][0]["stats"]["res"] = 10;
      $battles["U0007"]["units"][0]["builds"][0] = "steel sword";
      $battles["U0007"]["units"][0]["builds"][1] = "";
      $battles["U0007"]["units"][0]["builds"][2] = "obstruct 2";
      $battles["U0007"]["units"][0]["builds"][3] = "";
      $battles["U0007"]["units"][0]["builds"][4] = "";
      // assist skill
      $battles["U0007"]["units"][0]["builds"][5] = "";
      //special
      $battles["U0007"]["units"][0]["builds"][6] = "";

     $battles["U0007"]["units"][1]["name"] = "lancefighter";
     $battles["U0007"]["units"][1]["class"] = "fighter";
     $battles["U0007"]["units"][1]["rating"] = 3;
     $battles["U0007"]["units"][1]["coords"] = [0, 0];
     $battles["U0007"]["units"][1]["ishero"] = false;
     $battles["U0007"]["units"][1]["movement"] = 2;
       $battles["U0007"]["units"][1]["stats"]["lvl"] = 15;
       $battles["U0007"]["units"][1]["stats"]["hp"] = 27;
       $battles["U0007"]["units"][1]["stats"]["atk"] = 22;
       $battles["U0007"]["units"][1]["stats"]["spd"] = 14;
       $battles["U0007"]["units"][1]["stats"]["def"] = 14;
       $battles["U0007"]["units"][1]["stats"]["res"] = 10;
       $battles["U0007"]["units"][1]["builds"][0] = "steel lance";
       $battles["U0007"]["units"][1]["builds"][1] = "";
       $battles["U0007"]["units"][1]["builds"][2] = "obstruct 2";
       $battles["U0007"]["units"][1]["builds"][3] = "";
       $battles["U0007"]["units"][1]["builds"][4] = "";
       // assist skill
       $battles["U0007"]["units"][1]["builds"][5] = "";
       //special
       $battles["U0007"]["units"][1]["builds"][6] = "";

     $battles["U0007"]["units"][2]["name"] = "lancefighter";
     $battles["U0007"]["units"][2]["class"] = "fighter";
     $battles["U0007"]["units"][2]["rating"] = 3;
     $battles["U0007"]["units"][2]["coords"] = [5, 7];
     $battles["U0007"]["units"][2]["ishero"] = false;
     $battles["U0007"]["units"][2]["movement"] = 2;
       $battles["U0007"]["units"][2]["stats"]["lvl"] = 15;
       $battles["U0007"]["units"][2]["stats"]["hp"] = 27;
       $battles["U0007"]["units"][2]["stats"]["atk"] = 22;
       $battles["U0007"]["units"][2]["stats"]["spd"] = 14;
       $battles["U0007"]["units"][2]["stats"]["def"] = 14;
       $battles["U0007"]["units"][2]["stats"]["res"] = 10;
       $battles["U0007"]["units"][2]["builds"][0] = "steel lance";
       $battles["U0007"]["units"][2]["builds"][1] = "";
       $battles["U0007"]["units"][2]["builds"][2] = "obstruct 2";
       $battles["U0007"]["units"][2]["builds"][3] = "";
       $battles["U0007"]["units"][2]["builds"][4] = "";
       // assist skill
       $battles["U0007"]["units"][2]["builds"][5] = "";
       //special
       $battles["U0007"]["units"][2]["builds"][6] = "";

     $battles["U0007"]["units"][3]["name"] = "axefighter";
     $battles["U0007"]["units"][3]["class"] = "fighter";
     $battles["U0007"]["units"][3]["rating"] = 3;
     $battles["U0007"]["units"][3]["coords"] = [0, 7];
     $battles["U0007"]["units"][3]["ishero"] = false;
     $battles["U0007"]["units"][3]["movement"] = 2;
       $battles["U0007"]["units"][3]["stats"]["lvl"] = 15;
       $battles["U0007"]["units"][3]["stats"]["hp"] = 27;
       $battles["U0007"]["units"][3]["stats"]["atk"] = 22;
       $battles["U0007"]["units"][3]["stats"]["spd"] = 14;
       $battles["U0007"]["units"][3]["stats"]["def"] = 14;
       $battles["U0007"]["units"][3]["stats"]["res"] = 10;
       $battles["U0007"]["units"][3]["builds"][0] = "steel axe";
       $battles["U0007"]["units"][3]["builds"][1] = "";
       $battles["U0007"]["units"][3]["builds"][2] = "obstruct 2";
       $battles["U0007"]["units"][3]["builds"][3] = "";
       $battles["U0007"]["units"][3]["builds"][4] = "";
       // assist skill
       $battles["U0007"]["units"][3]["builds"][5] = "";
       //special
       $battles["U0007"]["units"][3]["builds"][6] = "";

   // subaki: perfect expert
   $battles["U0008"]["name"] = "subaki: perfect expert";
   $battles["U0008"]["id"] = "U0008";
    $battles["U0008"]["bg"] = "mapassets/levelbackgrounds/subakibridges.png";
     $battles["U0008"]["units"][0]["name"] = "swordknight";
     $battles["U0008"]["units"][0]["rating"] = 3;
     $battles["U0008"]["units"][0]["movement"] = 1;

     $battles["U0008"]["units"][0]["class"] = "knight";
     $battles["U0008"]["units"][0]["coords"] = [0, 5];
     $battles["U0008"]["units"][0]["ishero"] = false;

      $battles["U0008"]["units"][0]["stats"]["lvl"] = 15;
      $battles["U0008"]["units"][0]["stats"]["hp"] = 34;
      $battles["U0008"]["units"][0]["stats"]["atk"] = 26;
      $battles["U0008"]["units"][0]["stats"]["spd"] = 6;
      $battles["U0008"]["units"][0]["stats"]["def"] = 20;
      $battles["U0008"]["units"][0]["stats"]["res"] = 8;
      $battles["U0008"]["units"][0]["builds"][0] = "steel sword";
      $battles["U0008"]["units"][0]["builds"][1] = "";
      $battles["U0008"]["units"][0]["builds"][2] = "";
      $battles["U0008"]["units"][0]["builds"][3] = "";
      $battles["U0008"]["units"][0]["builds"][4] = "";
      // assist skill
      $battles["U0008"]["units"][0]["builds"][5] = "";
      //special
      $battles["U0008"]["units"][0]["builds"][6] = "";

     $battles["U0008"]["units"][1]["name"] = "subaki";
     $battles["U0008"]["units"][1]["rating"] = 3;
     $battles["U0008"]["units"][1]["movement"] = 2;

     $battles["U0008"]["units"][1]["class"] = "flier";
     $battles["U0008"]["units"][1]["coords"] = [3, 3];
     $battles["U0008"]["units"][1]["ishero"] = true;

       $battles["U0008"]["units"][1]["stats"]["lvl"] = 15;
       $battles["U0008"]["units"][1]["stats"]["hp"] = 24;
       $battles["U0008"]["units"][1]["stats"]["atk"] = 19;
       $battles["U0008"]["units"][1]["stats"]["spd"] = 16;
       $battles["U0008"]["units"][1]["stats"]["def"] = 16;
       $battles["U0008"]["units"][1]["stats"]["res"] = 10;
       $battles["U0008"]["units"][1]["builds"][0] = "steel lance";
       $battles["U0008"]["units"][1]["builds"][1] = "";
       $battles["U0008"]["units"][1]["builds"][2] = "quick riposte 2";
       $battles["U0008"]["units"][1]["builds"][3] = "";
       $battles["U0008"]["units"][1]["builds"][4] = "";
       // assist skill
       $battles["U0008"]["units"][1]["builds"][5] = "";
       //special
       $battles["U0008"]["units"][1]["builds"][6] = "";

     $battles["U0008"]["units"][2]["name"] = "lancefighter";
     $battles["U0008"]["units"][2]["rating"] = 3;
     $battles["U0008"]["units"][2]["movement"] = 2;

     $battles["U0008"]["units"][2]["class"] = "fighter";
     $battles["U0008"]["units"][2]["coords"] = [5, 1];
     $battles["U0008"]["units"][2]["ishero"] = false;

       $battles["U0008"]["units"][2]["stats"]["lvl"] = 15;
       $battles["U0008"]["units"][2]["stats"]["hp"] = 23;
       $battles["U0008"]["units"][2]["stats"]["atk"] = 20;
       $battles["U0008"]["units"][2]["stats"]["spd"] = 16;
       $battles["U0008"]["units"][2]["stats"]["def"] = 9;
       $battles["U0008"]["units"][2]["stats"]["res"] = 17;
       $battles["U0008"]["units"][2]["builds"][0] = "steel sword";
       $battles["U0008"]["units"][2]["builds"][1] = "";
       $battles["U0008"]["units"][2]["builds"][2] = "";
       $battles["U0008"]["units"][2]["builds"][3] = "";
       $battles["U0008"]["units"][2]["builds"][4] = "";
       // assist skill
       $battles["U0008"]["units"][2]["builds"][5] = "";
       //special
       $battles["U0008"]["units"][2]["builds"][6] = "";

     $battles["U0008"]["units"][3]["name"] = "swordflier";
     $battles["U0008"]["units"][3]["rating"] = 3;
     $battles["U0008"]["units"][3]["movement"] = 2;

     $battles["U0008"]["units"][3]["class"] = "flier";
     $battles["U0008"]["units"][3]["coords"] = [0, 5];
     $battles["U0008"]["units"][3]["ishero"] = false;

       $battles["U0008"]["units"][3]["stats"]["lvl"] = 15;
       $battles["U0008"]["units"][3]["stats"]["hp"] = 23;
       $battles["U0008"]["units"][3]["stats"]["atk"] = 20;
       $battles["U0008"]["units"][3]["stats"]["spd"] = 16;
       $battles["U0008"]["units"][3]["stats"]["def"] = 9;
       $battles["U0008"]["units"][3]["stats"]["res"] = 17;
       $battles["U0008"]["units"][3]["builds"][0] = "steel sword";
       $battles["U0008"]["units"][3]["builds"][1] = "";
       $battles["U0008"]["units"][3]["builds"][2] = "";
       $battles["U0008"]["units"][3]["builds"][3] = "";
       $battles["U0008"]["units"][3]["builds"][4] = "";
       // assist skill
       $battles["U0008"]["units"][3]["builds"][5] = "";
       //special
       $battles["U0008"]["units"][3]["builds"][6] = "";

   // donnel: village hero
   $battles["U0009"]["name"] = "donnel: village hero";
   $battles["U0009"]["id"] = "U0009";
    $battles["U0009"]["bg"] = "mapassets/levelbackgrounds/donnelvillage.png";
     $battles["U0009"]["units"][0]["name"] = "donnel";
     $battles["U0009"]["units"][0]["rating"] = 3;
     $battles["U0009"]["units"][0]["movement"] = 2;

     $battles["U0009"]["units"][0]["class"] = "fighter";
     $battles["U0009"]["units"][0]["coords"] = [2, 3];
     $battles["U0009"]["units"][0]["ishero"] = true;

      $battles["U0009"]["units"][0]["stats"]["lvl"] = 15;
      $battles["U0009"]["units"][0]["stats"]["hp"] = 24;
      $battles["U0009"]["units"][0]["stats"]["atk"] = 23;
      $battles["U0009"]["units"][0]["stats"]["spd"] = 12;
      $battles["U0009"]["units"][0]["stats"]["def"] = 13;
      $battles["U0009"]["units"][0]["stats"]["res"] = 9;
      $battles["U0009"]["units"][0]["builds"][0] = "steel lance";
      $battles["U0009"]["units"][0]["builds"][1] = "";
      $battles["U0009"]["units"][0]["builds"][2] = "drag back";
      $battles["U0009"]["units"][0]["builds"][3] = "";
      $battles["U0009"]["units"][0]["builds"][4] = "";
      // assist skill
      $battles["U0009"]["units"][0]["builds"][5] = "";
      //special
      $battles["U0009"]["units"][0]["builds"][6] = "";

     $battles["U0009"]["units"][1]["name"] = "swordfighter";
     $battles["U0009"]["units"][1]["rating"] = 3;
     $battles["U0009"]["units"][1]["movement"] = 2;

     $battles["U0009"]["units"][1]["class"] = "fighter";
     $battles["U0009"]["units"][1]["coords"] = [2, 4];
     $battles["U0009"]["units"][1]["ishero"] = false;

       $battles["U0009"]["units"][1]["stats"]["lvl"] = 15;
       $battles["U0009"]["units"][1]["stats"]["hp"] = 27;
       $battles["U0009"]["units"][1]["stats"]["atk"] = 22;
       $battles["U0009"]["units"][1]["stats"]["spd"] = 14;
       $battles["U0009"]["units"][1]["stats"]["def"] = 14;
       $battles["U0009"]["units"][1]["stats"]["res"] = 10;
       $battles["U0009"]["units"][1]["builds"][0] = "steel sword";
       $battles["U0009"]["units"][1]["builds"][1] = "";
       $battles["U0009"]["units"][1]["builds"][2] = "drag back";
       $battles["U0009"]["units"][1]["builds"][3] = "";
       $battles["U0009"]["units"][1]["builds"][4] = "";
       // assist skill
       $battles["U0009"]["units"][1]["builds"][5] = "";
       //special
       $battles["U0009"]["units"][1]["builds"][6] = "";

     $battles["U0009"]["units"][2]["name"] = "lancefighter";
     $battles["U0009"]["units"][2]["rating"] = 3;
     $battles["U0009"]["units"][2]["movement"] = 2;

     $battles["U0009"]["units"][2]["class"] = "fighter";
     $battles["U0009"]["units"][2]["coords"] = [0, 5];
     $battles["U0009"]["units"][2]["ishero"] = false;

       $battles["U0009"]["units"][2]["stats"]["lvl"] = 15;
       $battles["U0009"]["units"][2]["stats"]["hp"] = 27;
       $battles["U0009"]["units"][2]["stats"]["atk"] = 22;
       $battles["U0009"]["units"][2]["stats"]["spd"] = 14;
       $battles["U0009"]["units"][2]["stats"]["def"] = 14;
       $battles["U0009"]["units"][2]["stats"]["res"] = 10;
       $battles["U0009"]["units"][2]["builds"][0] = "steel lance";
       $battles["U0009"]["units"][2]["builds"][1] = "";
       $battles["U0009"]["units"][2]["builds"][2] = "drag back";
       $battles["U0009"]["units"][2]["builds"][3] = "";
       $battles["U0009"]["units"][2]["builds"][4] = "";
       // assist skill
       $battles["U0009"]["units"][2]["builds"][5] = "";
       //special
       $battles["U0009"]["units"][2]["builds"][6] = "";

     $battles["U0009"]["units"][3]["name"] = "axefighter";
     $battles["U0009"]["units"][3]["rating"] = 3;
     $battles["U0009"]["units"][3]["movement"] = 2;

     $battles["U0009"]["units"][3]["class"] = "fighter";
     $battles["U0009"]["units"][3]["coords"] = [3, 3];
     $battles["U0009"]["units"][3]["ishero"] = false;

       $battles["U0009"]["units"][3]["stats"]["lvl"] = 15;
       $battles["U0009"]["units"][3]["stats"]["hp"] = 27;
       $battles["U0009"]["units"][3]["stats"]["atk"] = 22;
       $battles["U0009"]["units"][3]["stats"]["spd"] = 14;
       $battles["U0009"]["units"][3]["stats"]["def"] = 14;
       $battles["U0009"]["units"][3]["stats"]["res"] = 10;
       $battles["U0009"]["units"][3]["builds"][0] = "steel axe";
       $battles["U0009"]["units"][3]["builds"][1] = "";
       $battles["U0009"]["units"][3]["builds"][2] = "drag back";
       $battles["U0009"]["units"][3]["builds"][3] = "";
       $battles["U0009"]["units"][3]["builds"][4] = "";
       // assist skill
       $battles["U0009"]["units"][3]["builds"][5] = "";
       //special
       $battles["U0009"]["units"][3]["builds"][6] = "";


   // lissa: sprightly cleric
   $battles["U0010"]["name"] = "lissa: sprightly cleric";
   $battles["U0010"]["id"] = "U0010";
    $battles["U0010"]["bg"] = "mapassets/levelbackgrounds/lissafort.png";
     $battles["U0010"]["units"][0]["name"] = "axefighter";
     $battles["U0010"]["units"][0]["rating"] = 3;
     $battles["U0010"]["units"][0]["movement"] = 1;

     $battles["U0010"]["units"][0]["class"] = "fighter";
     $battles["U0010"]["units"][0]["coords"] = [4, 4];
     $battles["U0010"]["units"][0]["ishero"] = false;

      $battles["U0010"]["units"][0]["stats"]["lvl"] = 15;
      $battles["U0010"]["units"][0]["stats"]["hp"] = 27;
      $battles["U0010"]["units"][0]["stats"]["atk"] = 22;
      $battles["U0010"]["units"][0]["stats"]["spd"] = 14;
      $battles["U0010"]["units"][0]["stats"]["def"] = 14;
      $battles["U0010"]["units"][0]["stats"]["res"] = 10;
      $battles["U0010"]["units"][0]["builds"][0] = "steel axe";
      $battles["U0010"]["units"][0]["builds"][1] = "";
      $battles["U0010"]["units"][0]["builds"][2] = "";
      $battles["U0010"]["units"][0]["builds"][3] = "";
      $battles["U0010"]["units"][0]["builds"][4] = "";
      // assist skill
      $battles["U0010"]["units"][0]["builds"][5] = "shove";
      //special
      $battles["U0010"]["units"][0]["builds"][6] = "";

     $battles["U0010"]["units"][1]["name"] = "lissa";
     $battles["U0010"]["units"][1]["rating"] = 3;
     $battles["U0010"]["units"][1]["movement"] = 2;

     $battles["U0010"]["units"][1]["class"] = "troubadour";
     $battles["U0010"]["units"][1]["coords"] = [4, 3];
     $battles["U0010"]["units"][1]["ishero"] = true;

       $battles["U0010"]["units"][1]["stats"]["lvl"] = 15;
       $battles["U0010"]["units"][1]["stats"]["hp"] = 23;
       $battles["U0010"]["units"][1]["stats"]["atk"] = 22;
       $battles["U0010"]["units"][1]["stats"]["spd"] = 11;
       $battles["U0010"]["units"][1]["stats"]["def"] = 12;
       $battles["U0010"]["units"][1]["stats"]["res"] = 14;
       $battles["U0010"]["units"][1]["builds"][0] = "assault";
       $battles["U0010"]["units"][1]["builds"][1] = "";
       $battles["U0010"]["units"][1]["builds"][2] = "";
       $battles["U0010"]["units"][1]["builds"][3] = "";
       $battles["U0010"]["units"][1]["builds"][4] = "";
       // assist skill
       $battles["U0010"]["units"][1]["builds"][5] = "reconcile";
       //special
       $battles["U0010"]["units"][1]["builds"][6] = "";

     $battles["U0010"]["units"][2]["name"] = "cleric";
     $battles["U0010"]["units"][2]["rating"] = 3;
     $battles["U0010"]["units"][2]["movement"] = 2;

     $battles["U0010"]["units"][2]["class"] = "troubadour";
     $battles["U0010"]["units"][2]["coords"] = [4, 2];
     $battles["U0010"]["units"][2]["ishero"] = false;

       $battles["U0010"]["units"][2]["stats"]["lvl"] = 15;
       $battles["U0010"]["units"][2]["stats"]["hp"] = 22;
       $battles["U0010"]["units"][2]["stats"]["atk"] = 15;
       $battles["U0010"]["units"][2]["stats"]["spd"] = 12;
       $battles["U0010"]["units"][2]["stats"]["def"] = 11;
       $battles["U0010"]["units"][2]["stats"]["res"] = 16;
       $battles["U0010"]["units"][2]["builds"][0] = "pain";
       $battles["U0010"]["units"][2]["builds"][1] = "";
       $battles["U0010"]["units"][2]["builds"][2] = "";
       $battles["U0010"]["units"][2]["builds"][3] = "";
       $battles["U0010"]["units"][2]["builds"][4] = "";
       // assist skill
       $battles["U0010"]["units"][2]["builds"][5] = "physic";
       //special
       $battles["U0010"]["units"][2]["builds"][6] = "";

     $battles["U0010"]["units"][3]["name"] = "cleric";
     $battles["U0010"]["units"][3]["rating"] = 3;
     $battles["U0010"]["units"][3]["movement"] = 2;

     $battles["U0010"]["units"][3]["class"] = "troubadour";
     $battles["U0010"]["units"][3]["coords"] = [4, 5];
     $battles["U0010"]["units"][3]["ishero"] = false;

       $battles["U0010"]["units"][3]["stats"]["lvl"] = 15;
       $battles["U0010"]["units"][3]["stats"]["hp"] = 22;
       $battles["U0010"]["units"][3]["stats"]["atk"] = 15;
       $battles["U0010"]["units"][3]["stats"]["spd"] = 12;
       $battles["U0010"]["units"][3]["stats"]["def"] = 11;
       $battles["U0010"]["units"][3]["stats"]["res"] = 16;
       $battles["U0010"]["units"][3]["builds"][0] = "pain";
       $battles["U0010"]["units"][3]["builds"][1] = "";
       $battles["U0010"]["units"][3]["builds"][2] = "";
       $battles["U0010"]["units"][3]["builds"][3] = "";
       $battles["U0010"]["units"][3]["builds"][4] = "";
       // assist skill
       $battles["U0010"]["units"][3]["builds"][5] = "physic";
       //special
       $battles["U0010"]["units"][3]["builds"][6] = "";

   // gunter: inveterate soldier
   $battles["U0011"]["name"] = "gunter: inveterate soldier";
   $battles["U0011"]["id"] = "U0011";
    $battles["U0011"]["bg"] = "mapassets/levelbackgrounds/gunterwalls.png";
     $battles["U0011"]["units"][0]["name"] = "gunter";
     $battles["U0011"]["units"][0]["rating"] = 3;
     $battles["U0011"]["units"][0]["movement"] = 2;

     $battles["U0011"]["units"][0]["class"] = "cavelier";
     $battles["U0011"]["units"][0]["coords"] = [3, 1];
     $battles["U0011"]["units"][0]["ishero"] = true;

      $battles["U0011"]["units"][0]["stats"]["lvl"] = 15;
      $battles["U0011"]["units"][0]["stats"]["hp"] = 27;
      $battles["U0011"]["units"][0]["stats"]["atk"] = 24;
      $battles["U0011"]["units"][0]["stats"]["spd"] = 12;
      $battles["U0011"]["units"][0]["stats"]["def"] = 17;
      $battles["U0011"]["units"][0]["stats"]["res"] = 8;
      $battles["U0011"]["units"][0]["builds"][0] = "steel axe";
      $battles["U0011"]["units"][0]["builds"][1] = "armored blow 2";
      $battles["U0011"]["units"][0]["builds"][2] = "";
      $battles["U0011"]["units"][0]["builds"][3] = "";
      $battles["U0011"]["units"][0]["builds"][4] = "";
      // assist skill
      $battles["U0011"]["units"][0]["builds"][5] = "";
      //special
      $battles["U0011"]["units"][0]["builds"][6] = "";

     $battles["U0011"]["units"][1]["name"] = "redmage";
     $battles["U0011"]["units"][1]["rating"] = 3;
     $battles["U0011"]["units"][1]["movement"] = 2;

     $battles["U0011"]["units"][1]["class"] = "fighter";
     $battles["U0011"]["units"][1]["coords"] = [5, 4];
     $battles["U0011"]["units"][1]["ishero"] = false;

       $battles["U0011"]["units"][1]["stats"]["lvl"] = 15;
       $battles["U0011"]["units"][1]["stats"]["hp"] = 23;
       $battles["U0011"]["units"][1]["stats"]["atk"] = 18;
       $battles["U0011"]["units"][1]["stats"]["spd"] = 15;
       $battles["U0011"]["units"][1]["stats"]["def"] = 9;
       $battles["U0011"]["units"][1]["stats"]["res"] = 12;
       $battles["U0011"]["units"][1]["builds"][0] = "fire";
       $battles["U0011"]["units"][1]["builds"][1] = "";
       $battles["U0011"]["units"][1]["builds"][2] = "";
       $battles["U0011"]["units"][1]["builds"][3] = "";
       $battles["U0011"]["units"][1]["builds"][4] = "";
       // assist skill
       $battles["U0011"]["units"][1]["builds"][5] = "";
       //special
       $battles["U0011"]["units"][1]["builds"][6] = "";

     $battles["U0011"]["units"][2]["name"] = "bowfighter";
     $battles["U0011"]["units"][2]["rating"] = 3;
     $battles["U0011"]["units"][2]["movement"] = 2;

     $battles["U0011"]["units"][2]["class"] = "fighter";
     $battles["U0011"]["units"][2]["coords"] = [5, 3];
     $battles["U0011"]["units"][2]["ishero"] = false;

       $battles["U0011"]["units"][2]["stats"]["lvl"] = 15;
       $battles["U0011"]["units"][2]["stats"]["hp"] = 26;
       $battles["U0011"]["units"][2]["stats"]["atk"] = 21;
       $battles["U0011"]["units"][2]["stats"]["spd"] = 13;
       $battles["U0011"]["units"][2]["stats"]["def"] = 13;
       $battles["U0011"]["units"][2]["stats"]["res"] = 6;
       $battles["U0011"]["units"][2]["builds"][0] = "steel bow";
       $battles["U0011"]["units"][2]["builds"][1] = "";
       $battles["U0011"]["units"][2]["builds"][2] = "";
       $battles["U0011"]["units"][2]["builds"][3] = "";
       $battles["U0011"]["units"][2]["builds"][4] = "";
       // assist skill
       $battles["U0011"]["units"][2]["builds"][5] = "";
       //special
       $battles["U0011"]["units"][2]["builds"][6] = "";

     $battles["U0011"]["units"][3]["name"] = "lanceknight";
     $battles["U0011"]["units"][3]["rating"] = 3;
     $battles["U0011"]["units"][3]["movement"] = 1;

     $battles["U0011"]["units"][3]["class"] = "knight";
     $battles["U0011"]["units"][3]["coords"] = [3, 4];
     $battles["U0011"]["units"][3]["ishero"] = false;

       $battles["U0011"]["units"][3]["stats"]["lvl"] = 15;
       $battles["U0011"]["units"][3]["stats"]["hp"] = 34;
       $battles["U0011"]["units"][3]["stats"]["atk"] = 26;
       $battles["U0011"]["units"][3]["stats"]["spd"] = 6;
       $battles["U0011"]["units"][3]["stats"]["def"] = 20;
       $battles["U0011"]["units"][3]["stats"]["res"] = 8;
       $battles["U0011"]["units"][3]["builds"][0] = "steel lance";
       $battles["U0011"]["units"][3]["builds"][1] = "";
       $battles["U0011"]["units"][3]["builds"][2] = "";
       $battles["U0011"]["units"][3]["builds"][3] = "";
       $battles["U0011"]["units"][3]["builds"][4] = "";
       // assist skill
       $battles["U0011"]["units"][3]["builds"][5] = "";
       //special
       $battles["U0011"]["units"][3]["builds"][6] = "";


   // cecilia: etrurian general
   $battles["U0012"]["name"] = "cecilia: etrurian general";
   $battles["U0012"]["id"] = "U0012";
    $battles["U0012"]["bg"] = "mapassets/levelbackgrounds/ceciliabridge.png";
     $battles["U0012"]["units"][0]["name"] = "swordcavelier";
     $battles["U0012"]["units"][0]["rating"] = 3;
     $battles["U0012"]["units"][0]["movement"] = 3;

     $battles["U0012"]["units"][0]["class"] = "cavelier";
     $battles["U0012"]["units"][0]["coords"] = [4, 0];
     $battles["U0012"]["units"][0]["ishero"] = false;

      $battles["U0012"]["units"][0]["stats"]["lvl"] = 15;
      $battles["U0012"]["units"][0]["stats"]["hp"] = 25;
      $battles["U0012"]["units"][0]["stats"]["atk"] = 21;
      $battles["U0012"]["units"][0]["stats"]["spd"] = 10;
      $battles["U0012"]["units"][0]["stats"]["def"] = 11;
      $battles["U0012"]["units"][0]["stats"]["res"] = 14;
      $battles["U0012"]["units"][0]["builds"][0] = "iron sword";
      $battles["U0012"]["units"][0]["builds"][1] = "";
      $battles["U0012"]["units"][0]["builds"][2] = "";
      $battles["U0012"]["units"][0]["builds"][3] = "";
      $battles["U0012"]["units"][0]["builds"][4] = "";
      // assist skill
      $battles["U0012"]["units"][0]["builds"][5] = "";
      //special
      $battles["U0012"]["units"][0]["builds"][6] = "";

     $battles["U0012"]["units"][1]["name"] = "cecilia";
     $battles["U0012"]["units"][1]["rating"] = 3;
     $battles["U0012"]["units"][1]["movement"] = 3;

     $battles["U0012"]["units"][1]["class"] = "cavelier";
     $battles["U0012"]["units"][1]["coords"] = [5, 0];
     $battles["U0012"]["units"][1]["ishero"] = true;

       $battles["U0012"]["units"][1]["stats"]["lvl"] = 15;
       $battles["U0012"]["units"][1]["stats"]["hp"] = 22;
       $battles["U0012"]["units"][1]["stats"]["atk"] = 21;
       $battles["U0012"]["units"][1]["stats"]["spd"] = 11;
       $battles["U0012"]["units"][1]["stats"]["def"] = 10;
       $battles["U0012"]["units"][1]["stats"]["res"] = 13;
       $battles["U0012"]["units"][1]["builds"][0] = "elwind";
       $battles["U0012"]["units"][1]["builds"][1] = "";
       $battles["U0012"]["units"][1]["builds"][2] = "escape route 2";
       $battles["U0012"]["units"][1]["builds"][3] = "";
       $battles["U0012"]["units"][1]["builds"][4] = "";
       // assist skill
       $battles["U0012"]["units"][1]["builds"][5] = "";
       //special
       $battles["U0012"]["units"][1]["builds"][6] = "";

     $battles["U0012"]["units"][2]["name"] = "axefighter";
     $battles["U0012"]["units"][2]["rating"] = 3;
     $battles["U0012"]["units"][2]["movement"] = 2;

     $battles["U0012"]["units"][2]["class"] = "flier";
     $battles["U0012"]["units"][2]["coords"] = [4, 7];
     $battles["U0012"]["units"][2]["ishero"] = false;

       $battles["U0012"]["units"][2]["stats"]["lvl"] = 15;
       $battles["U0012"]["units"][2]["stats"]["hp"] = 23;
       $battles["U0012"]["units"][2]["stats"]["atk"] = 20;
       $battles["U0012"]["units"][2]["stats"]["spd"] = 16;
       $battles["U0012"]["units"][2]["stats"]["def"] = 9;
       $battles["U0012"]["units"][2]["stats"]["res"] = 17;
       $battles["U0012"]["units"][2]["builds"][0] = "steel axe";
       $battles["U0012"]["units"][2]["builds"][1] = "";
       $battles["U0012"]["units"][2]["builds"][2] = "";
       $battles["U0012"]["units"][2]["builds"][3] = "";
       $battles["U0012"]["units"][2]["builds"][4] = "";
       // assist skill
       $battles["U0012"]["units"][2]["builds"][5] = "";
       //special
       $battles["U0012"]["units"][2]["builds"][6] = "";

     $battles["U0012"]["units"][3]["name"] = "bowcavelier";
     $battles["U0012"]["units"][3]["rating"] = 3;
     $battles["U0012"]["units"][3]["movement"] = 3;

     $battles["U0012"]["units"][3]["class"] = "cavelier";
     $battles["U0012"]["units"][3]["coords"] = [5, 7];
     $battles["U0012"]["units"][3]["ishero"] = false;

       $battles["U0012"]["units"][3]["stats"]["lvl"] = 15;
       $battles["U0012"]["units"][3]["stats"]["hp"] = 24;
       $battles["U0012"]["units"][3]["stats"]["atk"] = 22;
       $battles["U0012"]["units"][3]["stats"]["spd"] = 10;
       $battles["U0012"]["units"][3]["stats"]["def"] = 10;
       $battles["U0012"]["units"][3]["stats"]["res"] = 11;
       $battles["U0012"]["units"][3]["builds"][0] = "steel bow";
       $battles["U0012"]["units"][3]["builds"][1] = "";
       $battles["U0012"]["units"][3]["builds"][2] = "";
       $battles["U0012"]["units"][3]["builds"][3] = "";
       $battles["U0012"]["units"][3]["builds"][4] = "";
       // assist skill
       $battles["U0012"]["units"][3]["builds"][5] = "";
       //special
       $battles["U0012"]["units"][3]["builds"][6] = "";
?>
