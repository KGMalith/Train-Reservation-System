<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>
        Timetable
    </title>

</head>

<body>
    <div class="header1">
        <div class="h">
            <!--Title-->
            <h1><b>Book My Train</b></h1>
            <!--Logo & Login-->
            <img src="Img/log.jpg" class="logo">
            <a href="#"><img src="Logo/lock.png" class="lock"></a>
        </div>
        <!--Navigation-->
        <div class="navi">
            <a class="home1" href="Home.php">Home</a>
            <a href="Timetable.php">Time Table</a>
            <a href="TicketPrice.php">Ticket Price</a>
            <a href="promotions.php">Promotions</a>
            <a href="aboutus.php">About Us</a>
            <a href="ContactUs.php">Contact Us</a>
            <div class="search">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <div class="reserve">
        <!--Topic-->
        <div class="reserv1">
            <h2>Time Table</h2>
        </div>
        <form action="#" method="POST" id="availability">
            <!--Start-->
            <label>Destination </label>
            <select name="start" id="first" required>
               <option value="select">--START--</option>
               <option value="Abanpola">Abanpola</option>
               <option value="Abeypussa">Abeypussa</option>
               <option value="Ahangama">Ahangama</option>
               <option value="Ahungalle">Ahungalle</option>
               <option value="Akurala">Akurala</option>
               <option value="Alawatupitiya">Alawatupitiya</option>
               <option value="Alawwa">Alawwa</option>
               <option value="Aluthgama">Aluthgama</option>
               <option value="Ambalangoda">Ambalangoda</option>
               <option value="Ambewela">Ambewela</option>
               <option value="Anawilundawa">Anawilundawa</option>
               <option value="Andadola">Andadola</option>
               <option value="Angampitiya">Angampitiya</option>
               <option value="Angulana">Angulana</option>
               <option value="Anuradhapura">Anuradhapura</option>
               <option value="Anuradhapura Town">Anuradhapura Town</option>
               <option value="Arachchikattuwa">Arachchikattuwa</option>
               <option value="Arukkuwatte">Arukkuwatte</option>
               <option value="Avisawella">Avisawella</option>
               <option value="Badulla">Badulla</option>
               <option value="Balana">Balana</option>
               <option value="Balapitiya">Balapitiya</option>
               <option value="Bambalapitiya">Bambalapitiya</option>
               <option value="Bandarawela">Bandarawela</option>
               <option value="Bangadeniya">Bangadeniya</option>
               <option value="Baseline Road">Baseline Road</option>
               <option value="Battaluoya">Battaluoya</option>
               <option value="Batticaloa">Batticaloa</option>
               <option value="Batuwatte">Batuwatte</option>
               <option value="Bemmulla">Bemmulla</option>
               <option value="Bentota">Bentota</option>
               <option value="Beruwala">Beruwala</option>
               <option value="Bolawatte">Bolawatte</option>
               <option value="Boossa">Boossa</option>
               <option value="Borelessa">Borelessa</option>
               <option value="Botale">Botale</option>
               <option value="Bulugahagoda">Bulugahagoda</option>
               <option value="Buthgamuwa">Buthgamuwa</option>
               <option value="Chavakachcheri">Chavakachcheri</option>
               <option value="Cheddikulam">Cheddikulam</option>
               <option value="Chilaw">Chilaw</option>
               <option value="China Bay">China Bay</option>
               <option value="Chunnakam">Chunnakam</option>
               <option value="Cotta Road">Cotta Road</option>
               <option value="Daraluwa">Daraluwa</option>
               <option value="Dehiwala">Dehiwala</option>
               <option value="Dematagoda">Dematagoda</option>
               <option value="Demodara">Demodara</option>
               <option value="Deyatalawa">Deyatalawa</option>
               <option value="Dodanduwa">Dodanduwa</option>
               <option value="Egodauyana">Egodauyana</option>
               <option value="ElephantPass">ElephantPass</option>
               <option value="Elle">Elle</option>
               <option value="Eravur">Eravur</option>
               <option value="Erittaperiyakulam">Erittaperiyakulam</option>
               <option value="Erukkalam pendu">Erukkalam pendu</option>
               <option value="Fort">Fort</option>
               <option value="Gal Oya Junction">Gal Oya Junction</option>
               <option value="Galaboda">Galaboda</option>
               <option value="Galgamuwa">Galgamuwa</option>
               <option value="Galle">Galle</option>
               <option value="Gammana">Gammana</option>
               <option value="Gampaha">Gampaha</option>
               <option value="Gampola">Gampola</option>
               <option value="Ganegoda">Ganegoda</option>
               <option value="Ganemulla">Ganemulla</option>
               <option value="Ganewatte">Ganewatte</option>
               <option value="Gangoda">Gangoda</option>
               <option value="Gelioya">Gelioya</option>
               <option value="Ginthota">Ginthota</option>
               <option value="Girambe">Girambe</option>
               <option value="Godagama">Godagama</option>
               <option value="Greatwestern">Greatwestern</option>
               <option value="Habaraduwa">Habaraduwa</option>
               <option value="Haliela">Haliela</option>
               <option value="Haputale">Haputale</option>
               <option value="Hatton">Hatton</option>
               <option value="Heeloya">Heeloya</option>
               <option value="Heendeniya">Heendeniya</option>
               <option value="Hettimulla">Hettimulla</option>
               <option value="Higurakgoda">Higurakgoda</option>
               <option value="Hikkaduwa">Hikkaduwa</option>
               <option value="Homagama">Homagama</option>
               <option value="Homagama Hospital">Homagama Hospital</option>
               <option value="Horape">Horape</option>
               <option value="Hunupitiya">Hunupitiya</option>
               <option value="Idalgasinna">Idalgasinna</option>
               <option value="Ihalakotte">Ihalakotte</option>
               <option value="Ihalawatawala">Ihalawatawala</option>
               <option value="Induruwa">Induruwa</option>
               <option value="Inguruoya">Inguruoya</option>
               <option value="Ja-Ela">Ja-Ela</option>
               <option value="Jaffna">Jaffna</option>
               <option value="Kadigamuwa">Kadigamuwa</option>
               <option value="Kadugannawa">Kadugannawa</option>
               <option value="Kadugoda">Kadugoda</option>
               <option value="Kahawa">Kahawa</option>
               <option value="Kakkapalliya">Kakkapalliya</option>
               <option value="Kalawewa">Kalawewa</option>
               <option value="Kalutara North">Kalutara North</option>
               <option value="Kaluthara South">Kaluthara South</option>
               <option value="Kamburugamuwa">Kamburugamuwa</option>
               <option value="Kandana">Kandana</option>
               <option value="Kandegoda">Kandegoda</option>
               <option value="Kandy">Kandy</option>
               <option value="Kankesanthurei">Kankesanthurei</option>
               <option value="Kantale">Kantale</option>
               <option value="Kapuwatte">Kapuwatte</option>
               <option value="Karadipuwar">Karadipuwar</option>
               <option value="Kathaluwa">Kathaluwa</option>
               <option value="kattuwa">kattuwa</option>
               <option value="Katugastota">Katugastota</option>
               <option value="Katugoda">Katugoda</option>
               <option value="Katukurunda">Katukurunda</option>
               <option value="Katunayaka Airport">Katunayaka Airport</option>
               <option value="Katunayake">Katunayake</option>
               <option value="Keenawala">Keenawala</option>
               <option value="kekirawa">kekirawa</option>
               <option value="Kelaniya">Kelaniya</option>
               <option value="Kilinochchi">Kilinochchi</option>
               <option value="Kinigama">Kinigama</option>
               <option value="Kirulapone">Kirulapone</option>
               <option value="Kitalelle">Kitalelle</option>
               <option value="Kochchikade">Kochchikade</option>
               <option value="Kodikamam">Kodikamam</option>
               <option value="Koggala">Koggala</option>
               <option value="Kollupitiya">Kollupitiya</option>
               <option value="Kompnnavidiya">Kompnnavidiya</option>
               <option value="Kondavil">Kondavil</option>
               <option value="Konwewa ">Konwewa </option>
               <option value="Koralawella">Koralawella</option>
               <option value="Kosgama">Kosgama</option>
               <option value="kosgoda">kosgoda</option>
               <option value="Koshinna">Koshinna</option>
               <option value="Kotagala">Kotagala</option>
               <option value="Kottawa">Kottawa</option>
               <option value="Kudahakapola">Kudahakapola</option>
               <option value="Kudawewa">Kudawewa</option>
               <option value="Kumarakanda">Kumarakanda</option>
               <option value="Kumbalgama">Kumbalgama</option>
               <option value="Kurana">Kurana</option>
               <option value="Kurunegala">Kurunegala</option>
               <option value="Liyanagemulla">Liyanagemulla</option>
               <option value="Lunawa">Lunawa</option>
               <option value="Lunuwila">Lunuwila</option>
               <option value="Madampagama">Madampagama</option>
               <option value="Madampe">Madampe</option>
               <option value="Madu Road">Madu Road</option>
               <option value="Madurankuliya">Madurankuliya</option>
               <option value="Magelegoda">Magelegoda</option>
               <option value="Maggona">Maggona</option>
               <option value="Mahaiyawa">Mahaiyawa</option>
               <option value="maharagama">maharagama</option>
               <option value="Maho">Maho</option>
               <option value="Malapalle">Malapalle</option>
               <option value="Manampitiya">Manampitiya</option>
               <option value="Mangalaeliya">Mangalaeliya</option>
               <option value="Mankulam">Mankulam</option>
               <option value="Mannar">Mannar</option>
               <option value="Manuwangama">Manuwangama</option>
               <option value="Maradana">Maradana</option>
               <option value="Matale">Matale</option>
               <option value="Matara">Matara</option>
               <option value="Medagama">Medagama</option>
               <option value="Medawachchiya">Medawachchiya</option>
               <option value="Meegoda">Meegoda</option>
               <option value="Mha Induruwa">Mha Induruwa</option>
               <option value="Midigama">Midigama</option>
               <option value="Mihintale">Mihintale</option>
               <option value="Mihintale Junction">Mihintale Junction</option>
               <option value="Mihirigama">Mihirigama</option>
               <option value="Mirissa">Mirissa</option>
               <option value="Moragollagama">Moragollagama</option>
               <option value="Morakele">Morakele</option>
               <option value="Moratuwa">Moratuwa</option>
               <option value="Mount Laviniya">Mount Laviniya</option>
               <option value="Mundal">Mundal</option>
               <option value="Murukandi">Murukandi</option>
               <option value="Murunkan">Murunkan</option>
               <option value="Muththettugala">Muththettugala</option>
               <option value="Nagollagama">Nagollagama</option>
               <option value="Nailiya">Nailiya</option>
               <option value="Nanuoya">Nanuoya</option>
               <option value="Narahenpita">Narahenpita</option>
               <option value="Nattandiya">Nattandiya</option>
               <option value="Navatkuli">Navatkuli</option>
               <option value="Nawalapitiya">Nawalapitiya</option>
               <option value="Nawinna">Nawinna</option>
               <option value="Negombo">Negombo</option>
               <option value="Nelumpokuna">Nelumpokuna</option>
               <option value="Noor Nagar">Noor Nagar</option>
               <option value="Nugegoda">Nugegoda</option>
               <option value="Ohiya">Ohiya</option>
               <option value="Omantai">Omantai</option>
               <option value="Padukka">Padukka</option>
               <option value="Palavi">Palavi</option>
               <option value="Pallai">Pallai</option>
               <option value="Pallewala">Pallewala</option>
               <option value="Palugaswewa">Palugaswewa</option>
               <option value="Panadura">Panadura</option>
               <option value="Panagoda">Panagoda</option>
               <option value="Panaleeya">Panaleeya</option>
               <option value="Pannipitiya">Pannipitiya</option>
               <option value="Paranthan">Paranthan</option>
               <option value="Parasangahawewa">Parasangahawewa</option>
               <option value="Patagamgoda">Patagamgoda</option>
               <option value="Pathanpha">Pathanpha</option>
               <option value="Pattipola">Pattipola</option>
               <option value="Payagala North">Payagala North</option>
               <option value="Payagala south">Payagala south</option>
               <option value="Peradeniya">Peradeniya</option>
               <option value="Perakumpura">Perakumpura</option>
               <option value="Peralanda">Peralanda</option>
               <option value="Periyanagavillu">Periyanagavillu</option>
               <option value="Pesalai">Pesalai</option>
               <option value="Piliduwa">Piliduwa</option>
               <option value="Pilimatalawa">Pilimatalawa</option>
               <option value="Pinnawala">Pinnawala</option>
               <option value="Pinwatte">Pinwatte</option>
               <option value="Piyadigama">Piyadigama</option>
               <option value="Piyagama">Piyagama</option>
               <option value="Polonnaruwa">Polonnaruwa</option>
               <option value="Polwathumodara">Polwathumodara</option>
               <option value="Poonewa">Poonewa</option>
               <option value="Poplgahawela">Poplgahawela</option>
               <option value="Potuhera">Potuhera</option>
               <option value="Pulachchikulam">Pulachchikulam</option>
               <option value="Puliyankulama">Puliyankulama</option>
               <option value="Punani">Punani</option>
               <option value="Puttalam">Puttalam</option>
               <option value="puwakpitiya">puwakpitiya</option>
               <option value="Radella">Radella</option>
               <option value="Ragama">Ragama</option>
               <option value="Rambukkana">Rambukkana</option>
               <option value="Randenigama">Randenigama</option>
               <option value="Rathgama">Rathgama</option>
               <option value="Rathmalana">Rathmalana</option>
               <option value="Richmond Hill">Richmond Hill</option>
               <option value="Rosella">Rosella</option>
               <option value="Saliyapura">Saliyapura</option>
               <option value="Sarasaviuyana">Sarasaviuyana</option>
               <option value="Sawarana">Sawarana</option>
               <option value="Secretartat Halt">Secretartat Halt</option>
               <option value="Seeduwa">Seeduwa</option>
               <option value="Seenigama">Seenigama</option>
               <option value="Senarathgama">Senarathgama</option>
               <option value="Srawasthipura">Srawasthipura</option>
               <option value="Talaimannar">Talaimannar</option>
               <option value="Talaimannar Pier">Talaimannar Pier</option>
               <option value="Talawa">Talawa</option>
               <option value="Talawakele">Talawakele</option>
               <option value="Talawattegedara">Talawattegedara</option>
               <option value="Tambalagamuwa">Tambalagamuwa</option>
               <option value="Taple">Taple</option>
               <option value="Telwatte">Telwatte</option>
               <option value="Tembligala">Tembligala</option>
               <option value="Thambuttegama">Thambuttegama</option>
               <option value="Thilladiya">Thilladiya</option>
               <option value="Thiranagama">Thiranagama</option>
               <option value="Timbiriyagedara">Timbiriyagedara</option>
               <option value="Tismalpola">Tismalpola</option>
               <option value="Trincomalee">Trincomalee</option>
               <option value="Tudella">Tudella</option>
               <option value="Tummodara">Tummodara</option>
               <option value="Udatalawinna">Udatalawinna</option>
               <option value="Udaththawala">Udaththawala</option>
               <option value="Udhamulla">Udhamulla</option>
               <option value="Uduwara">Uduwara</option>
               <option value="Uggalla">Uggalla</option>
               <option value="Ukuwela">Ukuwela</option>
               <option value="Ulapone">Ulapone</option>
               <option value="Unawatuna">Unawatuna</option>
               <option value="Valachchenai">Valachchenai</option>
               <option value="Vavuniya">Vavuniya</option>
               <option value="Veyangoda">Veyangoda</option>
               <option value="Wadduwa">Wadduwa</option>
               <option value="Waga">Waga</option>
               <option value="Waikkala">Waikkala</option>
               <option value="Walahapitiya">Walahapitiya</option>
               <option value="Walgama">Walgama</option>
               <option value="Walpola">Walpola</option>
               <option value="Wanawasala">Wanawasala</option>
               <option value="Wandurawa">Wandurawa</option>
               <option value="watagoda">watagoda</option>
               <option value="Watareka">Watareka</option>
               <option value="Watawala">Watawala</option>
               <option value="Wattegama">Wattegama</option>
               <option value="weligama">weligama</option>
               <option value="Welikanda">Welikanda</option>
               <option value="Wellawa">Wellawa</option>
               <option value="wellawatte">wellawatte</option>
               <option value="Wijayarajadahana">Wijayarajadahana</option>
               <option value="Wilwatte">Wilwatte</option>
               <option value="Wlakubura">Wlakubura</option>
               <option value="Yagoda">Yagoda</option>
               <option value="Yahapauwa">Yahapauwa</option>
               <option value="Yatagama">Yatagama</option>
               <option value="Yattalgoda">Yattalgoda</option>
           </select> &nbsp;&nbsp;
            <label>To</label> &nbsp;&nbsp;
            <!--End-->

            <select name="End" id="secound" required>
                   <option value="select">--END--</option>
                   <option value="Abanpola">Abanpola</option>
                   <option value="Abeypussa">Abeypussa</option>
                   <option value="Ahangama">Ahangama</option>
                   <option value="Ahungalle">Ahungalle</option>
                   <option value="Akurala">Akurala</option>
                   <option value="Alawatupitiya">Alawatupitiya</option>
                   <option value="Alawwa">Alawwa</option>
                   <option value="Aluthgama">Aluthgama</option>
                   <option value="Ambalangoda">Ambalangoda</option>
                   <option value="Ambewela">Ambewela</option>
                   <option value="Anawilundawa">Anawilundawa</option>
                   <option value="Andadola">Andadola</option>
                   <option value="Angampitiya">Angampitiya</option>
                   <option value="Angulana">Angulana</option>
                   <option value="Anuradhapura">Anuradhapura</option>
                   <option value="Anuradhapura Town">Anuradhapura Town</option>
                   <option value="Arachchikattuwa">Arachchikattuwa</option>
                   <option value="Arukkuwatte">Arukkuwatte</option>
                   <option value="Avisawella">Avisawella</option>
                   <option value="Badulla">Badulla</option>
                   <option value="Balana">Balana</option>
                   <option value="Balapitiya">Balapitiya</option>
                   <option value="Bambalapitiya">Bambalapitiya</option>
                   <option value="Bandarawela">Bandarawela</option>
                   <option value="Bangadeniya">Bangadeniya</option>
                   <option value="Baseline Road">Baseline Road</option>
                   <option value="Battaluoya">Battaluoya</option>
                   <option value="Batticaloa">Batticaloa</option>
                   <option value="Batuwatte">Batuwatte</option>
                   <option value="Bemmulla">Bemmulla</option>
                   <option value="Bentota">Bentota</option>
                   <option value="Beruwala">Beruwala</option>
                   <option value="Bolawatte">Bolawatte</option>
                   <option value="Boossa">Boossa</option>
                   <option value="Borelessa">Borelessa</option>
                   <option value="Botale">Botale</option>
                   <option value="Bulugahagoda">Bulugahagoda</option>
                   <option value="Buthgamuwa">Buthgamuwa</option>
                   <option value="Chavakachcheri">Chavakachcheri</option>
                   <option value="Cheddikulam">Cheddikulam</option>
                   <option value="Chilaw">Chilaw</option>
                   <option value="China Bay">China Bay</option>
                   <option value="Chunnakam">Chunnakam</option>
                   <option value="Cotta Road">Cotta Road</option>
                   <option value="Daraluwa">Daraluwa</option>
                   <option value="Dehiwala">Dehiwala</option>
                   <option value="Dematagoda">Dematagoda</option>
                   <option value="Demodara">Demodara</option>
                   <option value="Deyatalawa">Deyatalawa</option>
                   <option value="Dodanduwa">Dodanduwa</option>
                   <option value="Egodauyana">Egodauyana</option>
                   <option value="ElephantPass">ElephantPass</option>
                   <option value="Elle">Elle</option>
                   <option value="Eravur">Eravur</option>
                   <option value="Erittaperiyakulam">Erittaperiyakulam</option>
                   <option value="Erukkalam pendu">Erukkalam pendu</option>
                   <option value="Fort">Fort</option>
                   <option value="Gal Oya Junction">Gal Oya Junction</option>
                   <option value="Galaboda">Galaboda</option>
                   <option value="Galgamuwa">Galgamuwa</option>
                   <option value="Galle">Galle</option>
                   <option value="Gammana">Gammana</option>
                   <option value="Gampaha">Gampaha</option>
                   <option value="Gampola">Gampola</option>
                   <option value="Ganegoda">Ganegoda</option>
                   <option value="Ganemulla">Ganemulla</option>
                   <option value="Ganewatte">Ganewatte</option>
                   <option value="Gangoda">Gangoda</option>
                   <option value="Gelioya">Gelioya</option>
                   <option value="Ginthota">Ginthota</option>
                   <option value="Girambe">Girambe</option>
                   <option value="Godagama">Godagama</option>
                   <option value="Greatwestern">Greatwestern</option>
                   <option value="Habaraduwa">Habaraduwa</option>
                   <option value="Haliela">Haliela</option>
                   <option value="Haputale">Haputale</option>
                   <option value="Hatton">Hatton</option>
                   <option value="Heeloya">Heeloya</option>
                   <option value="Heendeniya">Heendeniya</option>
                   <option value="Hettimulla">Hettimulla</option>
                   <option value="Higurakgoda">Higurakgoda</option>
                   <option value="Hikkaduwa">Hikkaduwa</option>
                   <option value="Homagama">Homagama</option>
                   <option value="Homagama Hospital">Homagama Hospital</option>
                   <option value="Horape">Horape</option>
                   <option value="Hunupitiya">Hunupitiya</option>
                   <option value="Idalgasinna">Idalgasinna</option>
                   <option value="Ihalakotte">Ihalakotte</option>
                   <option value="Ihalawatawala">Ihalawatawala</option>
                   <option value="Induruwa">Induruwa</option>
                   <option value="Inguruoya">Inguruoya</option>
                   <option value="Ja-Ela">Ja-Ela</option>
                   <option value="Jaffna">Jaffna</option>
                   <option value="Kadigamuwa">Kadigamuwa</option>
                   <option value="Kadugannawa">Kadugannawa</option>
                   <option value="Kadugoda">Kadugoda</option>
                   <option value="Kahawa">Kahawa</option>
                   <option value="Kakkapalliya">Kakkapalliya</option>
                   <option value="Kalawewa">Kalawewa</option>
                   <option value="Kalutara North">Kalutara North</option>
                   <option value="Kaluthara South">Kaluthara South</option>
                   <option value="Kamburugamuwa">Kamburugamuwa</option>
                   <option value="Kandana">Kandana</option>
                   <option value="Kandegoda">Kandegoda</option>
                   <option value="Kandy">Kandy</option>
                   <option value="Kankesanthurei">Kankesanthurei</option>
                   <option value="Kantale">Kantale</option>
                   <option value="Kapuwatte">Kapuwatte</option>
                   <option value="Karadipuwar">Karadipuwar</option>
                   <option value="Kathaluwa">Kathaluwa</option>
                   <option value="kattuwa">kattuwa</option>
                   <option value="Katugastota">Katugastota</option>
                   <option value="Katugoda">Katugoda</option>
                   <option value="Katukurunda">Katukurunda</option>
                   <option value="Katunayaka Airport">Katunayaka Airport</option>
                   <option value="Katunayake">Katunayake</option>
                   <option value="Keenawala">Keenawala</option>
                   <option value="kekirawa">kekirawa</option>
                   <option value="Kelaniya">Kelaniya</option>
                   <option value="Kilinochchi">Kilinochchi</option>
                   <option value="Kinigama">Kinigama</option>
                   <option value="Kirulapone">Kirulapone</option>
                   <option value="Kitalelle">Kitalelle</option>
                   <option value="Kochchikade">Kochchikade</option>
                   <option value="Kodikamam">Kodikamam</option>
                   <option value="Koggala">Koggala</option>
                   <option value="Kollupitiya">Kollupitiya</option>
                   <option value="Kompnnavidiya">Kompnnavidiya</option>
                   <option value="Kondavil">Kondavil</option>
                   <option value="Konwewa ">Konwewa </option>
                   <option value="Koralawella">Koralawella</option>
                   <option value="Kosgama">Kosgama</option>
                   <option value="kosgoda">kosgoda</option>
                   <option value="Koshinna">Koshinna</option>
                   <option value="Kotagala">Kotagala</option>
                   <option value="Kottawa">Kottawa</option>
                   <option value="Kudahakapola">Kudahakapola</option>
                   <option value="Kudawewa">Kudawewa</option>
                   <option value="Kumarakanda">Kumarakanda</option>
                   <option value="Kumbalgama">Kumbalgama</option>
                   <option value="Kurana">Kurana</option>
                   <option value="Kurunegala">Kurunegala</option>
                   <option value="Liyanagemulla">Liyanagemulla</option>
                   <option value="Lunawa">Lunawa</option>
                   <option value="Lunuwila">Lunuwila</option>
                   <option value="Madampagama">Madampagama</option>
                   <option value="Madampe">Madampe</option>
                   <option value="Madu Road">Madu Road</option>
                   <option value="Madurankuliya">Madurankuliya</option>
                   <option value="Magelegoda">Magelegoda</option>
                   <option value="Maggona">Maggona</option>
                   <option value="Mahaiyawa">Mahaiyawa</option>
                   <option value="maharagama">maharagama</option>
                   <option value="Maho">Maho</option>
                   <option value="Malapalle">Malapalle</option>
                   <option value="Manampitiya">Manampitiya</option>
                   <option value="Mangalaeliya">Mangalaeliya</option>
                   <option value="Mankulam">Mankulam</option>
                   <option value="Mannar">Mannar</option>
                   <option value="Manuwangama">Manuwangama</option>
                   <option value="Maradana">Maradana</option>
                   <option value="Matale">Matale</option>
                   <option value="Matara">Matara</option>
                   <option value="Medagama">Medagama</option>
                   <option value="Medawachchiya">Medawachchiya</option>
                   <option value="Meegoda">Meegoda</option>
                   <option value="Mha Induruwa">Mha Induruwa</option>
                   <option value="Midigama">Midigama</option>
                   <option value="Mihintale">Mihintale</option>
                   <option value="Mihintale Junction">Mihintale Junction</option>
                   <option value="Mihirigama">Mihirigama</option>
                   <option value="Mirissa">Mirissa</option>
                   <option value="Moragollagama">Moragollagama</option>
                   <option value="Morakele">Morakele</option>
                   <option value="Moratuwa">Moratuwa</option>
                   <option value="Mount Laviniya">Mount Laviniya</option>
                   <option value="Mundal">Mundal</option>
                   <option value="Murukandi">Murukandi</option>
                   <option value="Murunkan">Murunkan</option>
                   <option value="Muththettugala">Muththettugala</option>
                   <option value="Nagollagama">Nagollagama</option>
                   <option value="Nailiya">Nailiya</option>
                   <option value="Nanuoya">Nanuoya</option>
                   <option value="Narahenpita">Narahenpita</option>
                   <option value="Nattandiya">Nattandiya</option>
                   <option value="Navatkuli">Navatkuli</option>
                   <option value="Nawalapitiya">Nawalapitiya</option>
                   <option value="Nawinna">Nawinna</option>
                   <option value="Negombo">Negombo</option>
                   <option value="Nelumpokuna">Nelumpokuna</option>
                   <option value="Noor Nagar">Noor Nagar</option>
                   <option value="Nugegoda">Nugegoda</option>
                   <option value="Ohiya">Ohiya</option>
                   <option value="Omantai">Omantai</option>
                   <option value="Padukka">Padukka</option>
                   <option value="Palavi">Palavi</option>
                   <option value="Pallai">Pallai</option>
                   <option value="Pallewala">Pallewala</option>
                   <option value="Palugaswewa">Palugaswewa</option>
                   <option value="Panadura">Panadura</option>
                   <option value="Panagoda">Panagoda</option>
                   <option value="Panaleeya">Panaleeya</option>
                   <option value="Pannipitiya">Pannipitiya</option>
                   <option value="Paranthan">Paranthan</option>
                   <option value="Parasangahawewa">Parasangahawewa</option>
                   <option value="Patagamgoda">Patagamgoda</option>
                   <option value="Pathanpha">Pathanpha</option>
                   <option value="Pattipola">Pattipola</option>
                   <option value="Payagala North">Payagala North</option>
                   <option value="Payagala south">Payagala south</option>
                   <option value="Peradeniya">Peradeniya</option>
                   <option value="Perakumpura">Perakumpura</option>
                   <option value="Peralanda">Peralanda</option>
                   <option value="Periyanagavillu">Periyanagavillu</option>
                   <option value="Pesalai">Pesalai</option>
                   <option value="Piliduwa">Piliduwa</option>
                   <option value="Pilimatalawa">Pilimatalawa</option>
                   <option value="Pinnawala">Pinnawala</option>
                   <option value="Pinwatte">Pinwatte</option>
                   <option value="Piyadigama">Piyadigama</option>
                   <option value="Piyagama">Piyagama</option>
                   <option value="Polonnaruwa">Polonnaruwa</option>
                   <option value="Polwathumodara">Polwathumodara</option>
                   <option value="Poonewa">Poonewa</option>
                   <option value="Poplgahawela">Poplgahawela</option>
                   <option value="Potuhera">Potuhera</option>
                   <option value="Pulachchikulam">Pulachchikulam</option>
                   <option value="Puliyankulama">Puliyankulama</option>
                   <option value="Punani">Punani</option>
                   <option value="Puttalam">Puttalam</option>
                   <option value="puwakpitiya">puwakpitiya</option>
                   <option value="Radella">Radella</option>
                   <option value="Ragama">Ragama</option>
                   <option value="Rambukkana">Rambukkana</option>
                   <option value="Randenigama">Randenigama</option>
                   <option value="Rathgama">Rathgama</option>
                   <option value="Rathmalana">Rathmalana</option>
                   <option value="Richmond Hill">Richmond Hill</option>
                   <option value="Rosella">Rosella</option>
                   <option value="Saliyapura">Saliyapura</option>
                   <option value="Sarasaviuyana">Sarasaviuyana</option>
                   <option value="Sawarana">Sawarana</option>
                   <option value="Secretartat Halt">Secretartat Halt</option>
                   <option value="Seeduwa">Seeduwa</option>
                   <option value="Seenigama">Seenigama</option>
                   <option value="Senarathgama">Senarathgama</option>
                   <option value="Srawasthipura">Srawasthipura</option>
                   <option value="Talaimannar">Talaimannar</option>
                   <option value="Talaimannar Pier">Talaimannar Pier</option>
                   <option value="Talawa">Talawa</option>
                   <option value="Talawakele">Talawakele</option>
                   <option value="Talawattegedara">Talawattegedara</option>
                   <option value="Tambalagamuwa">Tambalagamuwa</option>
                   <option value="Taple">Taple</option>
                   <option value="Telwatte">Telwatte</option>
                   <option value="Tembligala">Tembligala</option>
                   <option value="Thambuttegama">Thambuttegama</option>
                   <option value="Thilladiya">Thilladiya</option>
                   <option value="Thiranagama">Thiranagama</option>
                   <option value="Timbiriyagedara">Timbiriyagedara</option>
                   <option value="Tismalpola">Tismalpola</option>
                   <option value="Trincomalee">Trincomalee</option>
                   <option value="Tudella">Tudella</option>
                   <option value="Tummodara">Tummodara</option>
                   <option value="Udatalawinna">Udatalawinna</option>
                   <option value="Udaththawala">Udaththawala</option>
                   <option value="Udhamulla">Udhamulla</option>
                   <option value="Uduwara">Uduwara</option>
                   <option value="Uggalla">Uggalla</option>
                   <option value="Ukuwela">Ukuwela</option>
                   <option value="Ulapone">Ulapone</option>
                   <option value="Unawatuna">Unawatuna</option>
                   <option value="Valachchenai">Valachchenai</option>
                   <option value="Vavuniya">Vavuniya</option>
                   <option value="Veyangoda">Veyangoda</option>
                   <option value="Wadduwa">Wadduwa</option>
                   <option value="Waga">Waga</option>
                   <option value="Waikkala">Waikkala</option>
                   <option value="Walahapitiya">Walahapitiya</option>
                   <option value="Walgama">Walgama</option>
                   <option value="Walpola">Walpola</option>
                   <option value="Wanawasala">Wanawasala</option>
                   <option value="Wandurawa">Wandurawa</option>
                   <option value="watagoda">watagoda</option>
                   <option value="Watareka">Watareka</option>
                   <option value="Watawala">Watawala</option>
                   <option value="Wattegama">Wattegama</option>
                   <option value="weligama">weligama</option>
                   <option value="Welikanda">Welikanda</option>
                   <option value="Wellawa">Wellawa</option>
                   <option value="wellawatte">wellawatte</option>
                   <option value="Wijayarajadahana">Wijayarajadahana</option>
                   <option value="Wilwatte">Wilwatte</option>
                   <option value="Wlakubura">Wlakubura</option>
                   <option value="Yagoda">Yagoda</option>
                   <option value="Yahapauwa">Yahapauwa</option>
                   <option value="Yatagama">Yatagama</option>
                   <option value="Yattalgoda">Yattalgoda</option>
               </select>
            <br><br>

            <!--Date-->
            <label>Date Of Your Reservation </label>
            <input type="date" name="date" id="date" required><br><br>

            <!--Time-->
            <label>Time</label>
            <input type="time" name="time" id="time"><br><br>

            <!--Submit & Reset Buttons-->
            <input id="sub" type="submit" value="Submit">
            <input id="res" type="reset" value="Reset">
        </form>
    </div>

    <!--Footer 01-->
    <div class="footer1">
        <div>
            <img src="Logo/phone-book.png" class="contact">
        </div>
        <div class="email">Email :- Contact@Bookmytrain.com </div>
        <div class="social">
            <a href="https://twitter.com"><img src="Logo/twitter.png"></a>
            <a href="https://www.linkedin.com"><img src="Logo/linkedin.png"></a>
            <a href="https://www.facebook.com"><img src="Logo/facebook.png"></a>
            <a href="https://www.instagram.com/"><img src="Logo/instagram.png"></a>
        </div>

        <div>
            <ul id="link">
                <a href="ContactUs.php">
                    <li>Contact Us</li>
                </a>
                <a href="aboutus.php">
                    <li>About Us</li>
                </a>
                <a href="terms.php">
                    <li>Terms & Conditions</li>
                </a>
            </ul>

        </div>

        <div class="payment">
            <img src="Logo/paypal.png">
            <img src="Logo/mastercard.png">
            <img src="Logo/visa.png">
            <img src="Logo/american-express.png">
        </div>
    </div>
</body>


<footer>
    <!--Footer 02-->
    <div class="footer2">
        Copyright &copy; 2019 Book My Train Co.- All rights Reserved
    </div>

</footer>

</html>