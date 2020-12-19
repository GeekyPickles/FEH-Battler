(function() {
 "use strict";
 const MAPWIDTH = 6;
 const MAPHEIGHT = 8;
 const BHB = ["T0013", "T0015", "T0016", "T0017", "T0018",
              "T0021", "T0022", "T0025", "T0027", "T0054",
              "T0028", "T0032", "T0034", "T0035", "T0037",
              "T0040", "T0041", "T0043", "T0045", "T0046",
              "T0048", "T0049", "T0051", "T0052", "T0053"];
 const GHB = ["T0001", "T0002", "T0003", "T0004", "T0005",
              "T0006", "T0007", "T0008", "T0009", "T0010",
              "T0011", "T0012", "T0014", "T0019", "T0023",
              "T0024", "T0026", "T0029", "T0030", "T0031",
              "T0033", "T0036", "T0038", "T0039", "T0042",
              "T0044", "T0047", "T0050"];
  const HB = ["U0001", "U0002", "U0003", "U0004", "U0005",
              "U0006", "U0007", "U0008", "U0009", "U0010",
              "U0011", "U0012"];

  const LHB = ["L0001", "L0002", "L0003", "L0004", "L0005",
               "L0006", "L0007", "L0008", "L0009", "L0010",
               "L0012"];

  const MHB = ["L0011", "L0013"];

  const GAMEDATA_URL = "gamedata.php";
  const HERO_BATTLES = "?herobattles=";

  // really lazy
  let currentlySelectedBanner = null;
  let grid = new Array(6);
  let enemyUnits = [];
  let enemyStats = [];

 // const BATTLE_ARRAY = {
 //   "bhb" : {
 //     "T0013" : "T0013.png";
 //     "T0015" : "T0015.png";
 //   }
 // };

 window.addEventListener("load", initialize);

 function initialize() {
   setGrid();
   setScrollbars();
 }

 function setGrid() {
   let battlemap = document.getElementById("battlemap");

   for (let i = 0 ; i < MAPWIDTH; i++) {
     grid[i] = [];
   }


   for (let i = 0; i < MAPWIDTH * MAPHEIGHT; i++) {
     let newBox = document.createElement("div");
     let unit = document.createElement("img");
     let x = Math.floor(i / 8);
     let y = i % 8;

     newBox.classList.add("gridbox");

     newBox.setAttribute("id", "box" + x + "," + y);
     newBox.setAttribute("data-x", x);
     newBox.setAttribute("data-y", y);

     console.log(grid);
     grid[x].push(newBox);

     battlemap.appendChild(newBox);
   }
 }

 function setScrollbars() {
   let bhbscrollbar = document.getElementById("bhbscrollbar");
   let ghbscrollbar = document.getElementById("ghbscrollbar");
   let hbscrollbar = document.getElementById("hbscrollbar");
   let lhbscrollbar = document.getElementById("lhbscrollbar");
   let mhbscrollbar = document.getElementById("mhbscrollbar");

   // redudant code
   for (let i = 0; i < BHB.length; i++) {
     let bhbbanner = document.createElement("img");
     bhbbanner.src = "uiassets/boundherobattles/" + BHB[i] + ".png";
     bhbbanner.setAttribute("id", BHB[i]);
     bhbbanner.classList.add("battlebanner");
     bhbscrollbar.appendChild(bhbbanner);
     bhbbanner.addEventListener("click", battleSelector);
   }

   for (let i = 0; i < BHB.length; i++) {
     let ghbbanner = document.createElement("img");
     ghbbanner.src = "uiassets/grandherobattles/" + GHB[i] + ".png";
     ghbbanner.setAttribute("id", GHB[i]);
     ghbbanner.classList.add("battlebanner");
     ghbscrollbar.appendChild(ghbbanner);
     ghbbanner.addEventListener("click", battleSelector);
   }

   for (let i = 0; i < HB.length; i++) {
     let hbbanner = document.createElement("img");
     hbbanner.src = "uiassets/herobattles/" + HB[i] + ".png";
     hbbanner.setAttribute("id", HB[i]);
     hbbanner.classList.add("battlebanner");
     hbscrollbar.appendChild(hbbanner);
     hbbanner.addEventListener("click", battleSelector);
   }

   for (let i = 0; i < LHB.length; i++) {
     let lhbbanner = document.createElement("img");
     lhbbanner.src = "uiassets/legendaryherobattles/" + LHB[i] + ".png";
     lhbbanner.setAttribute("id", LHB[i]);
     lhbbanner.classList.add("battlebanner");
     lhbscrollbar.appendChild(lhbbanner);
     lhbbanner.addEventListener("click", battleSelector);
   }

   for (let i = 0; i < MHB.length; i++) {
     let mhbbanner = document.createElement("img");
     mhbbanner.src = "uiassets/mythicherobattles/" + MHB[i] + ".png";
     mhbbanner.setAttribute("id", MHB[i]);
     mhbbanner.classList.add("battlebanner");
     mhbscrollbar.appendChild(mhbbanner);
     mhbbanner.addEventListener("click", battleSelector);
   }
 }

 function battleSelector() {
   this.classList.add("selectedbanner");
   if (currentlySelectedBanner != null) {
     currentlySelectedBanner.classList.remove("selectedbanner");
   }
   currentlySelectedBanner = this;
   makeRequest(GAMEDATA_URL + HERO_BATTLES + this.id, setMap, checkStatusJSON);
 }

 function setMap(responseData) {
   let battlemapBG = document.getElementById("battlemap");
   let numbUnits = responseData["units"].length;

   if (enemyUnits.length != 0) {
     clearMap();
   }
   enemyUnits = [];
   for (let i = 0; i < numbUnits; i++) {
     let newUnit = document.createElement("img");
     let spawnX = responseData["units"][i]["coords"][0];
     let spawnY = responseData["units"][i]["coords"][1];
     let targetSpace = grid[spawnX][spawnY];
     let unitClass = responseData["units"][i]["class"];
     let unitName = responseData["units"][i]["name"];

     newUnit.setAttribute("data-x", spawnX);
     newUnit.setAttribute("data-y", spawnY);
     newUnit.setAttribute("data-name", unitName);
     newUnit.setAttribute("data-class", responseData["units"][i]["class"]);
     newUnit.setAttribute("data-rating", responseData["units"][i]["rating"]);
     newUnit.setAttribute("data-ishero", responseData["units"][i]["ishero"]);
     newUnit.setAttribute("data-movement", responseData["units"][i]["movement"]);
     newUnit.setAttribute("data-lvl", responseData["units"][i]["stats"]["lvl"]);
     newUnit.setAttribute("data-hp", responseData["units"][i]["stats"]["hp"]);
     newUnit.setAttribute("data-atk", responseData["units"][i]["stats"]["atk"]);
     newUnit.setAttribute("data-spd", responseData["units"][i]["stats"]["spd"]);
     newUnit.setAttribute("data-def", responseData["units"][i]["stats"]["def"]);
     newUnit.setAttribute("data-res", responseData["units"][i]["stats"]["res"]);
     newUnit.setAttribute("data-weapon", responseData["units"][i]["builds"][0]);
     newUnit.setAttribute("data-skilla", responseData["units"][i]["builds"][1]);
     newUnit.setAttribute("data-skillb", responseData["units"][i]["builds"][2]);
     newUnit.setAttribute("data-skillc", responseData["units"][i]["builds"][3]);
     newUnit.setAttribute("data-skills", responseData["units"][i]["builds"][4]);
     newUnit.setAttribute("data-skillassist", responseData["units"][i]["builds"][5]);
     newUnit.setAttribute("data-skillspecial", responseData["units"][i]["builds"][6]);

     if (responseData["units"][i]["ishero"] === false) {
       if (unitClass === "cavelier") {
         // portraits for caveliers and fighters are same
         let weaponName = unitName.substr(0, unitName.lastIndexOf("c"));
         if (weaponName != "red" && weaponName != "blue" && weaponName !="green") {
           unitClass = "fighter";
           unitName = weaponName + "fighter";
         }

         else {
           unitClass = "mage";
           unitName = weaponName + "mage";
         }
       }

       newUnit.src = "unitassets/generics/" + "generic" + unitClass +
                      "/" +  unitName + "portrait.png";

        // special portrait crops
        if (unitClass === "mage") {
          newUnit.classList.add("mageportraitshift");
        }

        else if (unitClass === "thief") {
          newUnit.classList.add("thiefportraitshift");
        }
        // generic horizontal portrait shift
        else {
          newUnit.classList.add("horizontalportraitshift");
        }
     }
     else if (responseData["units"][i]["ishero"] === true) {
       newUnit.src = "unitassets/heroes/" + unitName + "/" + unitName + "portrait.png";
       newUnit.classList.add("horizontalportraitshift");
     }

     newUnit.setAttribute("draggable", "true");
     newUnit.classList.add("mapportrait");
     enemyUnits.push(newUnit);
     let unitObject = new Unit(unitName, unitClass, responseData["units"][i]["rating"],
                    responseData["units"][i]["coords"], responseData["units"][i]["ishero"],
                    responseData["units"][i]["movement"], responseData["units"][i]["stats"]["hp"],
                    responseData["units"][i]["stats"]["atk"], responseData["units"][i]["stats"]["spd"],
                    responseData["units"][i]["stats"]["def"], responseData["units"][i]["stats"]["res"],
                    responseData["units"][i]["builds"][0], responseData["units"][i]["builds"][1],
                    responseData["units"][i]["builds"][2], responseData["units"][i]["builds"][3],
                    responseData["units"][i]["builds"][4], responseData["units"][i]["builds"][5],
                    responseData["units"][i]["builds"][6]);
     // let unitObjectName = unitName;
     // {[unitObjectName]}.value = unitObject.value;

     enemyStats.push();
     targetSpace.appendChild(newUnit);
     newUnit.addEventListener("click", moveCommand);

   }

   // let unit1 = document.createElement("img");
   // let unit2 = document.createElement("img");
   // let unit3 = document.createElement("img");
   // let unit4 = document.createElement("img");


   battlemapBG.style.backgroundImage = "url(" + responseData["bg"] + ")";
   battlemapBG.style.backgroundColor = "#1f2768";
 }

 function moveCommand() {
   let moveSpaces = this.dataset.movement;
   showMovement(this, moveSpaces);
 }

 function showMovement(currentUnit, moveSpaces) {
   let unitX = currentUnit.dataset.x;
   let unitY = currentUnit.dataset.y;
   movementIterator(moveSpaces, unitX, unitY);
 }

 function movementIterator(moveSpaces, unitX, unitY) {
   for (let i = 0; i < moveSpaces + 1; i++) {
     moveSpaces = parseInt(moveSpaces);
     unitX = parseInt(unitX);
     unitY = parseInt(unitY);
     let gridColumnUp = grid[unitX + i];

     let gridCardinalUp = gridColumnUp;
     gridCardinalUp = gridCardinalUp[unitY];
     gridCardinalUp.style.backgroundImage = "url('mapassets/movementindicators/movablespaces.png')";

     let gridCardinalDown = grid[unitX - i];
     gridCardinalDown = gridCardinalDown[unitY];
     gridCardinalDown.style.backgroundImage = "url('mapassets/movementindicators/movablespaces.png')";


     let gridBoxUp = gridColumnUp[unitY + (moveSpaces - 1)];
     gridBoxUp.style.backgroundImage = "url('mapassets/movementindicators/movablespaces.png')";
     let gridBoxDown = gridColumnUp[unitY - (moveSpaces - 1)];
     gridBoxDown.style.backgroundImage = "url('mapassets/movementindicators/movablespaces.png')";

     let gridColumnDown = grid[unitX - i];
     gridBoxUp = gridColumnDown[unitY + (moveSpaces - 1)];
     gridBoxUp.style.backgroundImage = "url('mapassets/movementindicators/movablespaces.png')";
     gridBoxDown = gridColumnDown[unitY - (moveSpaces - 1)];
     gridBoxDown.style.backgroundImage = "url('mapassets/movementindicators/movablespaces.png')";
   }
 }

 function Unit(name, heroClass, rating, coords, isHero, movement, hp, atk, spd, def,
               res, weapon, skillA, skillB, skillC, skillS,
               skillAssist, skillSpecial, ) {
   this.name = name;
   this.heroClass = heroClass;
   this.coords = coords;
   this.isHero = isHero;
   this.movement = movement;
   this.hp = hp;
   this.atk = atk;
   this.spd = spd;
   this.def = def;
   this.res = res;
   this.weapon = weapon;
   this.skillA = skillA;
   this.skillB = skillB;
   this.skillC = skillC;
   this.skillS = skillS;
   this.skillAssist = skillAssist;
   this.skillSpecial = skillSpecial;
 }

 function clearMap() {
   let battlemap = document.getElementById("battlemap");
   while (battlemap.firstChild) {
     battlemap.removeChild(battlemap.firstChild);
   }

   setGrid();
 }


  /**
  *  Makes GET request to specified URL and runs specified function if
  *  request is successful.
  *  @param {String} apiURL - URL that get request is made to
  *  @param {function} successFunction - function to be run if GET request is successful
  */
 function makeRequest(apiURL, successFunction, checkStatus) {
   console.log(apiURL);
   // CORB blocked, need HTML encoding
   // let myHeaders = new Headers();
   // myHeaders.append("X-Content-Type-Options","nosniff");
   // myHeaders.append("Content-Type", "application/json");
   // myHeaders.append("Access-Control-Allow-Origin", "*");
   //  fetch(apiURL, {headers: myHeaders, mode:"cors"})

   fetch(apiURL)
    .then(checkStatus)
    .then(successFunction)
    .catch(console.log);
 }

 /**
* Helper function to return the response's result text if successful, otherwise
* returns the rejected Promise result with an error status and corresponding text
* @param {object} response - response to check for success/error
* @returns {object} - valid result JSON if response was successful, otherwise rejected
*                     Promise result
*/
 function checkStatusJSON(response) {
   if (response.status < 300) {
    console.log("source extracted");
    return response.json();
  } else {
    console.log("source: " + response.json());

    // let profileDisplay = document.getElementById("info-display");
    // let loadingGif = qsa("#info-display img")[0];
    // let errorMessage = document.createElement("div");
    // errorMessage.classList.add("error-message");
    // profileDisplay.removeChild(loadingGif);
    //
    // if (response.status == "429") {
    //   errorMessage.innerText = "ERROR 429: TOO MANY REQUESTS";
    // }
    // else if (response.status == "403") {
    //   errorMessage.innerText = "ERROR 404: EXPIRED API KEY";
    // }
    // else if (response.status == "404") {
    //   errorMessage.innerText = "ERROR 404: SUMMONER NOT FOUND";
    // }
    //
    // else {
    //   errorMessage.innerText = "ERROR" + response.status;
    // }
    profileDisplay.appendChild(errorMessage);
    return Promise.reject(new Error(response.status + ": " + response.statusText));

  }
 }


})();
