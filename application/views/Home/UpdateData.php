<?php defined("BASEPATH") or exit("No direct scripts allowed here"); ?>
<?php
	if (isset($action))
	{
		switch ($action)
		{
			case "EditAddress";  
		?>
		<form action="<?php echo base_url($this->data->controller.'/'.$this->data->method.'/UpdateAddress'); ?>" method="post" enctype="multipart/form-data" id="updateForm2">
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			<div class="form-group">
				<label>Shipping details will be sent to: <span class="text-danger">*</span></label> 
				<input type="text" required name="name" value="<?php echo $list[0]->name; ?>" class="form-control" placeholder="Full Name" data-parsley-required-message="Please enter full name">
			</div>
			<div class="form-group">
				<label>Choose State <span class="text-danger">*</span></label>
				<select onchange="print_city2('Cities', this.selectedIndex);" id="states" name ="state" class="form-control" required data-parsley-required-message="Please select state">
					<option value="<?php echo $list[0]->state; ?>"><?php echo $list[0]->state; ?></option>
				</select>
			</div>
			<div class="form-group">
				<label>Choose City <span class="text-danger">*</span></label>
				<select id ="Cities" name="city" class="form-control" required data-parsley-required-message="Please select city">
					<option value="<?php echo $list[0]->city; ?>"><?php echo $list[0]->city; ?></option>
				</select>
			</div>
			<div class="form-group">
				<label>Pin Code <span class="text-danger">*</span></label> 
				<input type="number" name="pincode" value="<?php echo $list[0]->pincode; ?>" class="form-control" placeholder="pincode"required data-parsley-required-message="Please enter pin">
			</div>
			<div class="form-group">
				<label>Flat/House No./Building<span class="text-danger">*</span></label> 
				<input type="text" name="addressline1" value="<?php echo $list[0]->line1; ?>" class="form-control" placeholder="Flat/House No./Building*" required data-parsley-required-message="Please enter Flat/House No./Building">
			</div>
			<div class="form-group">
				<label>Area/Locality<span class="text-danger">*</span></label> 
				<input type="text" name="addressline2" value="<?php echo $list[0]->line2; ?>" class="form-control"   placeholder="Area/Locality*" required data-parsley-required-message="Please enter Area/Locality">
			</div>
			<div class="form-group">
				<label>Landmark<span class="text-danger">(Optional)</span></label> 
				<input type="text" name="addressline3" class="form-control" value="<?php echo $list[0]->line3; ?>"  placeholder="Landmark" >
			</div>
			<div class="form-group">
				<label>Phone Number<span class="text-danger">*</span></label> 
				<input type="number" name="mobile" value="<?php echo $list[0]->mobile; ?>" class="form-control" placeholder="mobile number" required required data-parsley-required-message="Please enter mobile number." parsley-trigger="keyup" data-parsley-pattern-message="Please enter a valid Indian mobile number." pattern="/^(?:(?:\+|0{0,2})91(\s*|[\-])?|[0]?)?([6789]\d{2}([ -]?)\d{3}([ -]?)\d{4})$/" maxlength="10" oninput="this.value=this.value.slice(0,this.maxLength)">
			</div>
			<div class="form-group">
				<label>Alternate No.<span class="text-danger">(optional)</span></label> 
				<input type="number" name="alternate_mobile" class="form-control" value="<?php echo $list[0]->alternate_mobile; ?>" placeholder="mobile number" parsley-trigger="keyup" data-parsley-pattern-message="Please enter a valid Indian mobile number." pattern="/^(?:(?:\+|0{0,2})91(\s*|[\-])?|[0]?)?([6789]\d{2}([ -]?)\d{3}([ -]?)\d{4})$/" maxlength="10" oninput="this.value=this.value.slice(0,this.maxLength)" >
			</div>
			<div class="form-group">
				<label>Address Type<span class="text-danger">*</span></label>  <br>
				<input type="radio"  checked="<?php if($list[0]->address_type == 'home'){echo 'checked';}?>"  required name="addresstype" id="Home" value="home" data-parsley-required-message="Please select address type" > <label for="Home">Home</label>
				&emsp;<input type="radio" checked="<?php if($list[0]->address_type == 'work'){echo 'checked';}?>"  required name="addresstype" id="Work"  value="work"> <label for="Work">Work</label>
			</div>
			<div class="form-group">
				<input type="checkbox" <?php if($list[0]->default_address == 'true'){echo 'checked';}?> name="defaultaddress" for="" id="chebox" >
				<label for="chebox">Use this as your Default Address<span class="text-danger"></span></label> 
			</div>
			<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
			value="<?= $this->security->get_csrf_hash(); ?>" />
			<button type="submit" class="btn btn-secondary" id="updateBtn2"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpin2" style="display:none;"></i></button>
		</form>
		<script>
			
			jQuery( document ).ready(function() {
				print_state2('states','<?php echo $list[0]->state; ?>');
			});
			
			var state_arr2 = new Array("Andaman & Nicobar", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra & Nagar Haveli", "Daman & Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu & Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttar Pradesh", "Uttaranchal", "West Bengal");
			
			var s_a = new Array();
			s_a[0]="";
			s_a[1]=" Alipur | Andaman Island | Anderson Island | Arainj-Laka-Punga | Austinabad | Bamboo Flat | Barren Island | Beadonabad | Betapur | Bindraban | Bonington | Brookesabad | Cadell Point | Calicut | Chetamale | Cinque Islands | Defence Island | Digilpur | Dolyganj | Flat Island | Geinyale | Great Coco Island | Haddo | Havelock Island | Henry Lawrence Island | Herbertabad | Hobdaypur | Ilichar | Ingoie | Inteview Island | Jangli Ghat | Jhon Lawrence Island | Karen | Kartara | KYD Islannd | Landfall Island | Little Andmand | Little Coco Island | Long Island | Maimyo | Malappuram | Manglutan | Manpur | Mitha Khari | Neill Island | Nicobar Island | North Brother Island | North Passage Island | North Sentinel Island | Nothen Reef Island | Outram Island | Pahlagaon | Palalankwe | Passage Island | Phaiapong | Phoenix Island | Port Blair | Preparis Island | Protheroepur | Rangachang | Rongat | Rutland Island | Sabari | Saddle Peak | Shadipur | Smith Island | Sound Island | South Sentinel Island | Spike Island | Tarmugli Island | Taylerabad | Titaije | Toibalawe | Tusonabad | West Island | Wimberleyganj | Yadita";
			s_a[2]=" Achampet | Adilabad | Adoni | Alampur | Allagadda | Alur | Amalapuram | Amangallu | Anakapalle | Anantapur | Andole | Araku | Armoor | Asifabad | Aswaraopet | Atmakur | B. Kothakota | Badvel | Banaganapalle | Bandar | Bangarupalem | Banswada | Bapatla | Bellampalli | Bhadrachalam | Bhainsa | Bheemunipatnam | Bhimadole | Bhimavaram | Bhongir | Bhooragamphad | Boath | Bobbili | Bodhan | Chandoor | Chavitidibbalu | Chejerla | Chepurupalli | Cherial | Chevella | Chinnor | Chintalapudi | Chintapalle | Chirala | Chittoor | Chodavaram | Cuddapah | Cumbum | Darsi | Devarakonda | Dharmavaram | Dichpalli | Divi | Donakonda | Dronachalam | East Godavari | Eluru | Eturnagaram | Gadwal | Gajapathinagaram | Gajwel | Garladinne | Giddalur | Godavari | Gooty | Gudivada | Gudur | Guntur | Hindupur | Hunsabad | Huzurabad | Huzurnagar | Hyderabad | Ibrahimpatnam | Jaggayyapet | Jagtial | Jammalamadugu | Jangaon | Jangareddygudem | Jannaram | Kadiri | Kaikaluru | Kakinada | Kalwakurthy | Kalyandurg | Kamalapuram | Kamareddy | Kambadur | Kanaganapalle | Kandukuru | Kanigiri | Karimnagar | Kavali | Khammam | Khanapur (AP) | Kodangal | Koduru | Koilkuntla | Kollapur | Kothagudem | Kovvur | Krishna | Krosuru | Kuppam | Kurnool | Lakkireddipalli | Madakasira | Madanapalli | Madhira | Madnur | Mahabubabad | Mahabubnagar | Mahadevapur | Makthal | Mancherial | Mandapeta | Mangalagiri | Manthani | Markapur | Marturu | Medachal | Medak | Medarmetla | Metpalli | Mriyalguda | Mulug | Mylavaram | Nagarkurnool | Nalgonda | Nallacheruvu | Nampalle | Nandigama | Nandikotkur | Nandyal | Narasampet | Narasaraopet | Narayanakhed | Narayanpet | Narsapur | Narsipatnam | Nazvidu | Nelloe | Nellore | Nidamanur | Nirmal | Nizamabad | Nuguru | Ongole | Outsarangapalle | Paderu | Pakala | Palakonda | Paland | Palmaneru | Pamuru | Pargi | Parkal | Parvathipuram | Pathapatnam | Pattikonda | Peapalle | Peddapalli | Peddapuram | Penukonda | Piduguralla | Piler | Pithapuram | Podili | Polavaram | Prakasam | Proddatur | Pulivendla | Punganur | Putturu | Rajahmundri | Rajampeta | Ramachandrapuram | Ramannapet | Rampachodavaram | Rangareddy | Rapur | Rayachoti | Rayadurg | Razole | Repalle | Saluru | Sangareddy | Sathupalli | Sattenapalle | Satyavedu | Shadnagar | Siddavattam | Siddipet | Sileru | Sircilla | Sirpur Kagaznagar | Sodam | Sompeta | Srikakulam | Srikalahasthi | Srisailam | Srungavarapukota | Sudhimalla | Sullarpet | Tadepalligudem | Tadipatri | Tanduru | Tanuku | Tekkali | Tenali | Thungaturthy | Tirivuru | Tirupathi | Tuni | Udaygiri | Ulvapadu | Uravakonda | Utnor | V.R. Puram | Vaimpalli | Vayalpad | Venkatgiri | Venkatgirikota | Vijayawada | Vikrabad | Vinjamuru | Vinukonda | Visakhapatnam | Vizayanagaram | Vizianagaram | Vuyyuru | Wanaparthy | Warangal | Wardhannapet | Yelamanchili | Yelavaram | Yeleswaram | Yellandu | Yellanuru | Yellareddy | Yerragondapalem | Zahirabad ";
			s_a[3]=" Along | Anini | Anjaw | Bameng | Basar | Changlang | Chowkhem | Daporizo | Dibang Valley | Dirang | Hayuliang | Huri | Itanagar | Jairampur | Kalaktung | Kameng | Khonsa | Kolaring | Kurung Kumey | Lohit | Lower Dibang Valley | Lower Subansiri | Mariyang | Mechuka | Miao | Nefra | Pakkekesang | Pangin | Papum Pare | Passighat | Roing | Sagalee | Seppa | Siang | Tali | Taliha | Tawang | Tezu | Tirap | Tuting | Upper Siang | Upper Subansiri | Yiang Kiag ";
			s_a[4]=" Abhayapuri | Baithalangshu | Barama | Barpeta Road | Bihupuria | Bijni | Bilasipara | Bokajan | Bokakhat | Boko | Bongaigaon | Cachar | Cachar Hills | Darrang | Dhakuakhana | Dhemaji | Dhubri | Dibrugarh | Digboi | Diphu | Goalpara | Gohpur | Golaghat | Guwahati | Hailakandi | Hajo | Halflong | Hojai | Howraghat | Jorhat | Kamrup | Karbi Anglong | Karimganj | Kokarajhar | Kokrajhar | Lakhimpur | Maibong | Majuli | Mangaldoi | Mariani | Marigaon | Moranhat | Morigaon | Nagaon | Nalbari | Rangapara | Sadiya | Sibsagar | Silchar | Sivasagar | Sonitpur | Tarabarihat | Tezpur | Tinsukia | Udalgiri | Udalguri | UdarbondhBarpeta";
			s_a[5]=" Adhaura | Amarpur | Araria | Areraj | Arrah | Arwal | Aurangabad | Bagaha | Banka | Banmankhi | Barachakia | Barauni | Barh | Barosi | Begusarai | Benipatti | Benipur | Bettiah | Bhabhua | Bhagalpur | Bhojpur | Bidupur | Biharsharif | Bikram | Bikramganj | Birpur | Buxar | Chakai | Champaran | Chapara | Dalsinghsarai | Danapur | Darbhanga | Daudnagar | Dhaka | Dhamdaha | Dumraon | Ekma | Forbesganj | Gaya | Gogri | Gopalganj | H.Kharagpur | Hajipur | Hathua | Hilsa | Imamganj | Jahanabad | Jainagar | Jamshedpur | Jamui | Jehanabad | Jhajha | Jhanjharpur | Kahalgaon | Kaimur (Bhabua) | Katihar | Katoria | Khagaria | Kishanganj | Korha | Lakhisarai | Madhepura | Madhubani | Maharajganj | Mahua | Mairwa | Mallehpur | Masrakh | Mohania | Monghyr | Motihari | Motipur | Munger | Muzaffarpur | Nabinagar | Nalanda | Narkatiaganj | Naugachia | Nawada | Pakribarwan | Pakridayal | Patna | Phulparas | Piro | Pupri | Purena | Purnia | Rafiganj | Rajauli | Ramnagar | Raniganj | Raxaul | Rohtas | Rosera | S.Bakhtiarpur | Saharsa | Samastipur | Saran | Sasaram | Seikhpura | Sheikhpura | Sheohar | Sherghati | Sidhawalia | Singhwara | Sitamarhi | Siwan | Sonepur | Supaul | Thakurganj | Triveniganj | Udakishanganj | Vaishali | Wazirganj";
			s_a[6]=" Chandigarh | Mani Marja";
			s_a[7]=" Ambikapur | Antagarh | Arang | Bacheli | Bagbahera | Bagicha | Baikunthpur | Balod | Balodabazar | Balrampur | Barpalli | Basana | Bastanar | Bastar | Bderajpur | Bemetara | Berla | Bhairongarh | Bhanupratappur | Bharathpur | Bhatapara | Bhilai | Bhilaigarh | Bhopalpatnam | Bijapur | Bilaspur | Bodla | Bokaband | Chandipara | Chhinagarh | Chhuriakala | Chingmut | Chuikhadan | Dabhara | Dallirajhara | Dantewada | Deobhog | Dhamda | Dhamtari | Dharamjaigarh | Dongargarh | Durg | Durgakondal | Fingeshwar | Gariaband | Garpa | Gharghoda | Gogunda | Ilamidi | Jagdalpur | Janjgir | Janjgir-Champa | Jarwa | Jashpur | Jashpurnagar | Kabirdham-Kawardha | Kanker | Kasdol | Kathdol | Kathghora | Kawardha | Keskal | Khairgarh | Kondagaon | Konta | Korba | Korea | Kota | Koyelibeda | Kuakunda | Kunkuri | Kurud | Lohadigundah | Lormi | Luckwada | Mahasamund | Makodi | Manendragarh | Manpur | Marwahi | Mohla | Mungeli | Nagri | Narainpur | Narayanpur | Neora | Netanar | Odgi | Padamkot | Pakhanjur | Pali | Pandaria | Pandishankar | Parasgaon | Pasan | Patan | Pathalgaon | Pendra | Pratappur | Premnagar | Raigarh | Raipur | Rajnandgaon | Rajpur | Ramchandrapur | Saraipali | Saranggarh | Sarona | Semaria | Shakti | Sitapur | Sukma | Surajpur | Surguja | Tapkara | Toynar | Udaipur | Uproda | Wadrainagar";
			s_a[8]=" Amal | Amli | Bedpa | Chikhli | Dadra & Nagar Haveli | Dahikhed | Dolara | Galonda | Kanadi | Karchond | Khadoli | Kharadpada | Kherabari | Kherdi | Kothar | Luari | Mashat | Rakholi | Rudana | Saili | Sili | Silvassa | Sindavni | Udva | Umbarkoi | Vansda | Vasona | Velugam ";
			s_a[9]=" Brancavare | Dagasi | Daman | Diu | Magarvara | Nagwa | Pariali | Passo Covo ";
			s_a[10]=" Central Delhi | East Delhi | New Delhi | North Delhi | North East Delhi | North West Delhi | South Delhi | South West Delhi | West Delhi ";
			s_a[11]=" Canacona | Candolim | Chinchinim | Cortalim | Goa | Jua | Madgaon | Mahem | Mapuca | Marmagao | Panji | Ponda | Sanvordem | Terekhol ";
			s_a[12]=" Ahmedabad | Ahwa | Amod | Amreli | Anand | Anjar | Ankaleshwar | Babra | Balasinor | Banaskantha | Bansada | Bardoli | Bareja | Baroda | Barwala | Bayad | Bhachav | Bhanvad | Bharuch | Bhavnagar | Bhiloda | Bhuj | Billimora | Borsad | Botad | Chanasma | Chhota Udaipur | Chotila | Dabhoi | Dahod | Damnagar | Dang | Danta | Dasada | Dediapada | Deesa | Dehgam | Deodar | Devgadhbaria | Dhandhuka | Dhanera | Dharampur | Dhari | Dholka | Dhoraji | Dhrangadhra | Dhrol | Dwarka | Fortsongadh | Gadhada | Gandhi Nagar | Gariadhar | Godhra | Gogodar | Gondal | Halol | Halvad | Harij | Himatnagar | Idar | Jambusar | Jamjodhpur | Jamkalyanpur | Jamnagar | Jasdan | Jetpur | Jhagadia | Jhalod | Jodia | Junagadh | Junagarh | Kalawad | Kalol | Kapad Wanj | Keshod | Khambat | Khambhalia | Khavda | Kheda | Khedbrahma | Kheralu | Kodinar | Kotdasanghani | Kunkawav | Kutch | Kutchmandvi | Kutiyana | Lakhpat | Lakhtar | Lalpur | Limbdi | Limkheda | Lunavada | M.M.Mangrol | Mahuva | Malia-Hatina | Maliya | Malpur | Manavadar | Mandvi | Mangrol | Mehmedabad | Mehsana | Miyagam | Modasa | Morvi | Muli | Mundra | Nadiad | Nakhatrana | Nalia | Narmada | Naswadi | Navasari | Nizar | Okha | Paddhari | Padra | Palanpur | Palitana | Panchmahals | Patan | Pavijetpur | Porbandar | Prantij | Radhanpur | Rahpar | Rajaula | Rajkot | Rajpipla | Ranavav | Sabarkantha | Sanand | Sankheda | Santalpur | Santrampur | Savarkundla | Savli | Sayan | Sayla | Shehra | Sidhpur | Sihor | Sojitra | Sumrasar | Surat | Surendranagar | Talaja | Thara | Tharad | Thasra | Una-Diu | Upleta | Vadgam | Vadodara | Valia | Vallabhipur | Valod | Valsad | Vanthali | Vapi | Vav | Veraval | Vijapur | Viramgam | Visavadar | Visnagar | Vyara | Waghodia | Wankaner ";
			s_a[13]=" Adampur Mandi | Ambala | Assandh | Bahadurgarh | Barara | Barwala | Bawal | Bawanikhera | Bhiwani | Charkhidadri | Cheeka | Chhachrauli | Dabwali | Ellenabad | Faridabad | Fatehabad | Ferojpur Jhirka | Gharaunda | Gohana | Gurgaon | Hansi | Hisar | Jagadhari | Jatusana | Jhajjar | Jind | Julana | Kaithal | Kalanaur | Kalanwali | Kalka | Karnal | Kosli | Kurukshetra | Loharu | Mahendragarh | Meham | Mewat | Mohindergarh | Naraingarh | Narnaul | Narwana | Nilokheri | Nuh | Palwal | Panchkula | Panipat | Pehowa | Ratia | Rewari | Rohtak | Safidon | Sirsa | Siwani | Sonipat | Tohana | Tohsam | Yamunanagar ";
			s_a[14]=" Amb | Arki | Banjar | Bharmour | Bilaspur | Chamba | Churah | Dalhousie | Dehra Gopipur | Hamirpur | Jogindernagar | Kalpa | Kangra | Kinnaur | Kullu | Lahaul | Mandi | Nahan | Nalagarh | Nirmand | Nurpur | Palampur | Pangi | Paonta | Pooh | Rajgarh | Rampur Bushahar | Rohru | Shimla | Sirmaur | Solan | Spiti | Sundernagar | Theog | Udaipur | Una";
			s_a[15]=" Akhnoor | Anantnag | Badgam | Bandipur | Baramulla | Basholi | Bedarwah | Budgam | Doda | Gulmarg | Jammu | Kalakot | Kargil | Karnah | Kathua | Kishtwar | Kulgam | Kupwara | Leh | Mahore | Nagrota | Nobra | Nowshera | Nyoma | Padam | Pahalgam | Patnitop | Poonch | Pulwama | Rajouri | Ramban | Ramnagar | Reasi | Samba | Srinagar | Udhampur | Vaishno Devi ";
			s_a[16]=" Bagodar | Baharagora | Balumath | Barhi | Barkagaon | Barwadih | Basia | Bermo | Bhandaria | Bhawanathpur | Bishrampur | Bokaro | Bolwa | Bundu | Chaibasa | Chainpur | Chakardharpur | Chandil | Chatra | Chavparan | Daltonganj | Deoghar | Dhanbad | Dumka | Dumri | Garhwa | Garu | Ghaghra | Ghatsila | Giridih | Godda | Gomia | Govindpur | Gumla | Hazaribagh | Hunterganj | Ichak | Itki | Jagarnathpur | Jamshedpur | Jamtara | Japla | Jharmundi | Jhinkpani | Jhumaritalaiya | Kathikund | Kharsawa | Khunti | Koderma | Kolebira | Latehar | Lohardaga | Madhupur | Mahagama | Maheshpur Raj | Mandar | Mandu | Manoharpur | Muri | Nagarutatri | Nala | Noamundi | Pakur | Palamu | Palkot | Patan | Rajdhanwar | Rajmahal | Ramgarh | Ranchi | Sahibganj | Saraikela | Simaria | Simdega | Singhbhum | Tisri | Torpa ";
			s_a[17]=" Afzalpur | Ainapur | Aland | Alur | Anekal | Ankola | Arsikere | Athani | Aurad | Bableshwar | Badami | Bagalkot | Bagepalli | Bailhongal | Bangalore | Bangalore Rural | Bangarpet | Bantwal | Basavakalyan | Basavanabagewadi | Basavapatna | Belgaum | Bellary | Belthangady | Belur | Bhadravati | Bhalki | Bhatkal | Bidar | Bijapur | Biligi | Chadchan | Challakere | Chamrajnagar | Channagiri | Channapatna | Channarayapatna | Chickmagalur | Chikballapur | Chikkaballapur | Chikkanayakanahalli | Chikkodi | Chikmagalur | Chincholi | Chintamani | Chitradurga | Chittapur | Cowdahalli | Davanagere | Deodurga | Devangere | Devarahippargi | Dharwad | Doddaballapur | Gadag | Gangavathi | Gokak | Gowribdanpur | Gubbi | Gulbarga | Gundlupet | H.B.Halli | H.D. Kote | Haliyal | Hampi | Hangal | Harapanahalli | Hassan | Haveri | Hebri | Hirekerur | Hiriyur | Holalkere | Holenarsipur | Honnali | Honnavar | Hosadurga | Hosakote | Hosanagara | Hospet | Hubli | Hukkeri | Humnabad | Hungund | Hunsagi | Hunsur | Huvinahadagali | Indi | Jagalur | Jamkhandi | Jewargi | Joida | K.R. Nagar | Kadur | Kalghatagi | Kamalapur | Kanakapura | Kannada | Kargal | Karkala | Karwar | Khanapur | Kodagu | Kolar | Kollegal | Koppa | Koppal | Koratageri | Krishnarajapet | Kudligi | Kumta | Kundapur | Kundgol | Kunigal | Kurugodu | Kustagi | Lingsugur | Madikeri | Madugiri | Malavalli | Malur | Mandya | Mangalore | Manipal | Manvi | Mashal | Molkalmuru | Mudalgi | Muddebihal | Mudhol | Mudigere | Mulbagal | Mundagod | Mundargi | Murugod | Mysore | Nagamangala | Nanjangud | Nargund | Narsimrajapur | Navalgund | Nelamangala | Nimburga | Pandavapura | Pavagada | Puttur | Raibag | Raichur | Ramdurg | Ranebennur | Ron | Sagar | Sakleshpur | Salkani | Sandur | Saundatti | Savanur | Sedam | Shahapur | Shankarnarayana | Shikaripura | Shimoga | Shirahatti | Shorapur | Siddapur | Sidlaghatta | Sindagi | Sindhanur | Sira | Sirsi | Siruguppa | Somwarpet | Sorab | Sringeri | Sriniwaspur | Srirangapatna | Sullia | T. Narsipur | Tallak | Tarikere | Telgi | Thirthahalli | Tiptur | Tumkur | Turuvekere | Udupi | Virajpet | Wadi | Yadgiri | Yelburga | Yellapur ";
			s_a[18]=" Adimaly | Adoor | Agathy | Alappuzha | Alathur | Alleppey | Alwaye | Amini | Androth | Attingal | Badagara | Bitra | Calicut | Cannanore | Chetlet | Ernakulam | Idukki | Irinjalakuda | Kadamath | Kalpeni | Kalpetta | Kanhangad | Kanjirapally | Kannur | Karungapally | Kasargode | Kavarathy | Kiltan | Kochi | Koduvayur | Kollam | Kottayam | Kovalam | Kozhikode | Kunnamkulam | Malappuram | Mananthodi | Manjeri | Mannarghat | Mavelikkara | Minicoy | Munnar | Muvattupuzha | Nedumandad | Nedumgandam | Nilambur | Palai | Palakkad | Palghat | Pathaanamthitta | Pathanamthitta | Payyanur | Peermedu | Perinthalmanna | Perumbavoor | Punalur | Quilon | Ranni | Shertallai | Shoranur | Taliparamba | Tellicherry | Thiruvananthapuram | Thodupuzha | Thrissur | Tirur | Tiruvalla | Trichur | Trivandrum | Uppala | Vadakkanchery | Vikom | Wayanad ";
			s_a[19]=" Agatti Island | Bingaram Island | Bitra Island | Chetlat Island | Kadmat Island | Kalpeni Island | Kavaratti Island | Kiltan Island | Lakshadweep Sea | Minicoy Island | North Island | South Island ";
			s_a[20]=" Agar | Ajaigarh | Alirajpur | Amarpatan | Amarwada | Ambah | Anuppur | Arone | Ashoknagar | Ashta | Atner | Babaichichli | Badamalhera | Badarwsas | Badnagar | Badnawar | Badwani | Bagli | Baihar | Balaghat | Baldeogarh | Baldi | Bamori | Banda | Bandhavgarh | Bareli | Baroda | Barwaha | Barwani | Batkakhapa | Begamganj | Beohari | Berasia | Berchha | Betul | Bhainsdehi | Bhander | Bhanpura | Bhikangaon | Bhimpur | Bhind | Bhitarwar | Bhopal | Biaora | Bijadandi | Bijawar | Bijaypur | Bina | Birsa | Birsinghpur | Budhni | Burhanpur | Buxwaha | Chachaura | Chanderi | Chaurai | Chhapara | Chhatarpur | Chhindwara | Chicholi | Chitrangi | Churhat | Dabra | Damoh | Datia | Deori | Deosar | Depalpur | Dewas | Dhar | Dharampuri | Dindori | Gadarwara | Gairatganj | Ganjbasoda | Garoth | Ghansour | Ghatia | Ghatigaon | Ghorandogri | Ghughari | Gogaon | Gohad | Goharganj | Gopalganj | Gotegaon | Gourihar | Guna | Gunnore | Gwalior | Gyraspur | Hanumana | Harda | Harrai | Harsud | Hatta | Hoshangabad | Ichhawar | Indore | Isagarh | Itarsi | Jabalpur | Jabera | Jagdalpur | Jaisinghnagar | Jaithari | Jaitpur | Jaitwara | Jamai | Jaora | Jatara | Jawad | Jhabua | Jobat | Jora | Kakaiya | Kannod | Kannodi | Karanjia | Kareli | Karera | Karhal | Karpa | Kasrawad | Katangi | Katni | Keolari | Khachrod | Khajuraho | Khakner | Khalwa | Khandwa | Khaniadhana | Khargone | Khategaon | Khetia | Khilchipur | Khirkiya | Khurai | Kolaras | Kotma | Kukshi | Kundam | Kurwai | Kusmi | Laher | Lakhnadon | Lamta | Lanji | Lateri | Laundi | Maheshwar | Mahidpurcity | Maihar | Majhagwan | Majholi | Malhargarh | Manasa | Manawar | Mandla | Mandsaur | Manpur | Mauganj | Mawai | Mehgaon | Mhow | Morena | Multai | Mungaoli | Nagod | Nainpur | Narsingarh | Narsinghpur | Narwar | Nasrullaganj | Nateran | Neemuch | Niwari | Niwas | Nowgaon | Pachmarhi | Pandhana | Pandhurna | Panna | Parasia | Patan | Patera | Patharia | Pawai | Petlawad | Pichhore | Piparia | Pohari | Prabhapattan | Punasa | Pushprajgarh | Raghogarh | Raghunathpur | Rahatgarh | Raisen | Rajgarh | Rajpur | Ratlam | Rehli | Rewa | Sabalgarh | Sagar | Sailana | Sanwer | Sarangpur | Sardarpur | Satna | Saunsar | Sehore | Sendhwa | Seondha | Seoni | Seonimalwa | Shahdol | Shahnagar | Shahpur | Shajapur | Sheopur | Sheopurkalan | Shivpuri | Shujalpur | Sidhi | Sihora | Silwani | Singrauli | Sirmour | Sironj | Sitamau | Sohagpur | Sondhwa | Sonkatch | Susner | Tamia | Tarana | Tendukheda | Teonthar | Thandla | Tikamgarh | Timarani | Udaipura | Ujjain | Umaria | Umariapan | Vidisha | Vijayraghogarh | Waraseoni | Zhirnia ";
			s_a[21]=" Achalpur | Aheri | Ahmednagar | Ahmedpur | Ajara | Akkalkot | Akola | Akole | Akot | Alibagh | Amagaon | Amalner | Ambad | Ambejogai | Amravati | Arjuni Merogaon | Arvi | Ashti | Atpadi | Aurangabad | Ausa | Babhulgaon | Balapur | Baramati | Barshi Takli | Barsi | Basmatnagar | Bassein | Beed | Bhadrawati | Bhamregadh | Bhandara | Bhir | Bhiwandi | Bhiwapur | Bhokar | Bhokardan | Bhoom | Bhor | Bhudargad | Bhusawal | Billoli | Brahmapuri | Buldhana | Butibori | Chalisgaon | Chamorshi | Chandgad | Chandrapur | Chandur | Chanwad | Chhikaldara | Chikhali | Chinchwad | Chiplun | Chopda | Chumur | Dahanu | Dapoli | Darwaha | Daryapur | Daund | Degloor | Delhi Tanda | Deogad | Deolgaonraja | Deori | Desaiganj | Dhadgaon | Dhanora | Dharani | Dhiwadi | Dhule | Dhulia | Digras | Dindori | Edalabad | Erandul | Etapalli | Gadhchiroli | Gadhinglaj | Gaganbavada | Gangakhed | Gangapur | Gevrai | Ghatanji | Golegaon | Gondia | Gondpipri | Goregaon | Guhagar | Hadgaon | Hatkangale | Hinganghat | Hingoli | Hingua | Igatpuri | Indapur | Islampur | Jalgaon | Jalna | Jamkhed | Jamner | Jath | Jawahar | Jintdor | Junnar | Kagal | Kaij | Kalamb | Kalamnuri | Kallam | Kalmeshwar | Kalwan | Kalyan | Kamptee | Kandhar | Kankavali | Kannad | Karad | Karjat | Karmala | Katol | Kavathemankal | Kedgaon | Khadakwasala | Khamgaon | Khed | Khopoli | Khultabad | Kinwat | Kolhapur | Kopargaon | Koregaon | Kudal | Kuhi | Kurkheda | Kusumba | Lakhandur | Langa | Latur | Lonar | Lonavala | Madangad | Madha | Mahabaleshwar | Mahad | Mahagaon | Mahasala | Mahaswad | Malegaon | Malgaon | Malgund | Malkapur | Malsuras | Malwan | Mancher | Mangalwedha | Mangaon | Mangrulpur | Manjalegaon | Manmad | Maregaon | Mehda | Mekhar | Mohadi | Mohol | Mokhada | Morshi | Mouda | Mukhed | Mul | Mumbai | Murbad | Murtizapur | Murud | Nagbhir | Nagpur | Nahavara | Nanded | Nandgaon | Nandnva | Nandurbar | Narkhed | Nashik | Navapur | Ner | Newasa | Nilanga | Niphad | Omerga | Osmanabad | Pachora | Paithan | Palghar | Pali | Pandharkawada | Pandharpur | Panhala | Paranda | Parbhani | Parner | Parola | Parseoni | Partur | Patan | Pathardi | Pathari | Patoda | Pauni | Peint | Pen | Phaltan | Pimpalner | Pirangut | Poladpur | Pune | Pusad | Pusegaon | Radhanagar | Rahuri | Raigad | Rajapur | Rajgurunagar | Rajura | Ralegaon | Ramtek | Ratnagiri | Raver | Risod | Roha | Sakarwadi | Sakoli | Sakri | Salekasa | Samudrapur | Sangamner | Sanganeshwar | Sangli | Sangola | Sanguem | Saoner | Saswad | Satana | Satara | Sawantwadi | Seloo | Shahada | Shahapur | Shahuwadi | Shevgaon | Shirala | Shirol | Shirpur | Shirur | Shirwal | Sholapur | Shri Rampur | Shrigonda | Shrivardhan | Sillod | Sinderwahi | Sindhudurg | Sindkheda | Sindkhedaraja | Sinnar | Sironcha | Soyegaon | Surgena | Talasari | Talegaon S.Ji Pant | Taloda | Tasgaon | Thane | Tirora | Tiwasa | Trimbak | Tuljapur | Tumsar | Udgir | Umarkhed | Umrane | Umrer | Urlikanchan | Vaduj | Velhe | Vengurla | Vijapur | Vita | Wada | Wai | Walchandnagar | Wani | Wardha | Warlydwarud | Warora | Washim | Wathar | Yavatmal | Yawal | Yeola | Yeotmal ";
			s_a[22]=" Bishnupur | Chakpikarong | Chandel | Chattrik | Churachandpur | Imphal | Jiribam | Kakching | Kalapahar | Mao | Mulam | Parbung | Sadarhills | Saibom | Sempang | Senapati | Sochumer | Taloulong | Tamenglong | Thinghat | Thoubal | Ukhrul ";
			s_a[23]=" Amlaren | Baghmara | Cherrapunjee | Dadengiri | Garo Hills | Jaintia Hills | Jowai | Khasi Hills | Khliehriat | Mariang | Mawkyrwat | Nongpoh | Nongstoin | Resubelpara | Ri Bhoi | Shillong | Tura | Williamnagar";
			s_a[24]=" Aizawl | Champhai | Demagiri | Kolasib | Lawngtlai | Lunglei | Mamit | Saiha | Serchhip";
			s_a[25]=" Dimapur | Jalukie | Kiphire | Kohima | Mokokchung | Mon | Phek | Tuensang | Wokha | Zunheboto ";
			s_a[26]=" Anandapur | Angul | Anugul | Aska | Athgarh | Athmallik | Attabira | Bagdihi | Balangir | Balasore | Baleswar | Baliguda | Balugaon | Banaigarh | Bangiriposi | Barbil | Bargarh | Baripada | Barkot | Basta | Berhampur | Betanati | Bhadrak | Bhanjanagar | Bhawanipatna | Bhubaneswar | Birmaharajpur | Bisam Cuttack | Boriguma | Boudh | Buguda | Chandbali | Chhatrapur | Chhendipada | Cuttack | Daringbadi | Daspalla | Deodgarh | Deogarh | Dhanmandal | Dharamgarh | Dhenkanal | Digapahandi | Dunguripali | G. Udayagiri | Gajapati | Ganjam | Ghatgaon | Gudari | Gunupur | Hemgiri | Hindol | Jagatsinghapur | Jajpur | Jamankira | Jashipur | Jayapatna | Jeypur | Jharigan | Jharsuguda | Jujumura | Kalahandi | Kalimela | Kamakhyanagar | Kandhamal | Kantabhanji | Kantamal | Karanjia | Kashipur | Kendrapara | Kendujhar | Keonjhar | Khalikote | Khordha | Khurda | Komana | Koraput | Kotagarh | Kuchinda | Lahunipara | Laxmipur | M. Rampur | Malkangiri | Mathili | Mayurbhanj | Mohana | Motu | Nabarangapur | Naktideul | Nandapur | Narlaroad | Narsinghpur | Nayagarh | Nimapara | Nowparatan | Nowrangapur | Nuapada | Padampur | Paikamal | Palla Hara | Papadhandi | Parajang | Pardip | Parlakhemundi | Patnagarh | Pattamundai | Phiringia | Phulbani | Puri | Puruna Katak | R. Udayigiri | Rairakhol | Rairangpur | Rajgangpur | Rajkhariar | Rayagada | Rourkela | Sambalpur | Sohela | Sonapur | Soro | Subarnapur | Sunabeda | Sundergarh | Surada | T. Rampur | Talcher | Telkoi | Titlagarh | Tumudibandha | Udala | Umerkote ";
			s_a[27]=" Bahur | Karaikal | Mahe | Pondicherry | Purnankuppam | Valudavur | Villianur | Yanam ";
			s_a[28]=" Abohar | Ajnala | Amritsar | Balachaur | Barnala | Batala | Bathinda | Chandigarh | Dasua | Dinanagar | Faridkot | Fatehgarh Sahib | Fazilka | Ferozepur | Garhashanker | Goindwal | Gurdaspur | Guruharsahai | Hoshiarpur | Jagraon | Jalandhar | Jugial | Kapurthala | Kharar | Kotkapura | Ludhiana | Malaut | Malerkotla | Mansa | Moga | Muktasar | Nabha | Nakodar | Nangal | Nawanshahar | Nawanshahr | Pathankot | Patiala | Patti | Phagwara | Phillaur | Phulmandi | Quadian | Rajpura | Raman | Rayya | Ropar | Rupnagar | Samana | Samrala | Sangrur | Sardulgarh | Sarhind | SAS Nagar | Sultanpur Lodhi | Sunam | Tanda Urmar | Tarn Taran | Zira ";
			s_a[29]=" Abu Road | Ahore | Ajmer | Aklera | Alwar | Amber | Amet | Anupgarh | Asind | Aspur | Atru | Bagidora | Bali | Bamanwas | Banera | Bansur | Banswara | Baran | Bari | Barisadri | Barmer | Baseri | Bassi | Baswa | Bayana | Beawar | Begun | Behror | Bhadra | Bharatpur | Bhilwara | Bhim | Bhinmal | Bikaner | Bilara | Bundi | Chhabra | Chhipaborad | Chirawa | Chittorgarh | Chohtan | Churu | Dantaramgarh | Dausa | Deedwana | Deeg | Degana | Deogarh | Deoli | Desuri | Dhariawad | Dholpur | Digod | Dudu | Dungarpur | Dungla | Fatehpur | Gangapur | Gangdhar | Gerhi | Ghatol | Girwa | Gogunda | Hanumangarh | Hindaun | Hindoli | Hurda | Jahazpur | Jaipur | Jaisalmer | Jalore | Jhalawar | Jhunjhunu | Jodhpur | Kaman | Kapasan | Karauli | Kekri | Keshoraipatan | Khandar | Kherwara | Khetri | Kishanganj | Kishangarh | Kishangarhbas | Kolayat | Kota | Kotputli | Kotra | Kotri | Kumbalgarh | Kushalgarh | Ladnun | Ladpura | Lalsot | Laxmangarh | Lunkaransar | Mahuwa | Malpura | Malvi | Mandal | Mandalgarh | Mandawar | Mangrol | Marwar-Jn | Merta | Nadbai | Nagaur | Nainwa | Nasirabad | Nathdwara | Nawa | Neem Ka Thana | Newai | Nimbahera | Nohar | Nokha | Onli | Osian | Pachpadara | Pachpahar | Padampur | Pali | Parbatsar | Phagi | Phalodi | Pilani | Pindwara | Pipalda | Pirawa | Pokaran | Pratapgarh | Raipur | Raisinghnagar | Rajgarh | Rajsamand | Ramganj Mandi | Ramgarh | Rashmi | Ratangarh | Reodar | Rupbas | Sadulshahar | Sagwara | Sahabad | Salumber | Sanchore | Sangaria | Sangod | Sapotra | Sarada | Sardarshahar | Sarwar | Sawai Madhopur | Shahapura | Sheo | Sheoganj | Shergarh | Sikar | Sirohi | Siwana | Sojat | Sri Dungargarh | Sri Ganganagar | Sri Karanpur | Sri Madhopur | Sujangarh | Taranagar | Thanaghazi | Tibbi | Tijara | Todaraisingh | Tonk | Udaipur | Udaipurwati | Uniayara | Vallabhnagar | Viratnagar ";
			s_a[30]=" Barmiak | Be | Bhurtuk | Chhubakha | Chidam | Chubha | Chumikteng | Dentam | Dikchu | Dzongri | Gangtok | Gauzing | Gyalshing | Hema | Kerung | Lachen | Lachung | Lema | Lingtam | Lungthu | Mangan | Namchi | Namthang | Nanga | Nantang | Naya Bazar | Padamachen | Pakhyong | Pemayangtse | Phensang | Rangli | Rinchingpong | Sakyong | Samdong | Singtam | Siniolchu | Sombari | Soreng | Sosing | Tekhug | Temi | Tsetang | Tsomgo | Tumlong | Yangang | Yumtang ";
			s_a[31]=" Ambasamudram | Anamali | Arakandanallur | Arantangi | Aravakurichi | Ariyalur | Arkonam | Arni | Aruppukottai | Attur | Avanashi | Batlagundu | Bhavani | Chengalpattu | Chengam | Chennai | Chidambaram | Chingleput | Coimbatore | Courtallam | Cuddalore | Cumbum | Denkanikoitah | Devakottai | Dharampuram | Dharmapuri | Dindigul | Erode | Gingee | Gobichettipalayam | Gudalur | Gudiyatham | Harur | Hosur | Jayamkondan | Kallkurichi | Kanchipuram | Kangayam | Kanyakumari | Karaikal | Karaikudi | Karur | Keeranur | Kodaikanal | Kodumudi | Kotagiri | Kovilpatti | Krishnagiri | Kulithalai | Kumbakonam | Kuzhithurai | Madurai | Madurantgam | Manamadurai | Manaparai | Mannargudi | Mayiladuthurai | Mayiladutjurai | Mettupalayam | Metturdam | Mudukulathur | Mulanur | Musiri | Nagapattinam | Nagarcoil | Namakkal | Nanguneri | Natham | Neyveli | Nilgiris | Oddanchatram | Omalpur | Ootacamund | Ooty | Orathanad | Palacode | Palani | Palladum | Papanasam | Paramakudi | Pattukottai | Perambalur | Perundurai | Pollachi | Polur | Pondicherry | Ponnamaravathi | Ponneri | Pudukkottai | Rajapalayam | Ramanathapuram | Rameshwaram | Ranipet | Rasipuram | Salem | Sankagiri | Sankaran | Sathiyamangalam | Sivaganga | Sivakasi | Sriperumpudur | Srivaikundam | Tenkasi | Thanjavur | Theni | Thirumanglam | Thiruraipoondi | Thoothukudi | Thuraiyure | Tindivanam | Tiruchendur | Tiruchengode | Tiruchirappalli | Tirunelvelli | Tirupathur | Tirupur | Tiruttani | Tiruvallur | Tiruvannamalai | Tiruvarur | Tiruvellore | Tiruvettipuram | Trichy | Tuticorin | Udumalpet | Ulundurpet | Usiliampatti | Uthangarai | Valapady | Valliyoor | Vaniyambadi | Vedasandur | Vellore | Velur | Vilathikulam | Villupuram | Virudhachalam | Virudhunagar | Wandiwash | Yercaud ";
			s_a[32]=" Agartala | Ambasa | Bampurbari | Belonia | Dhalai | Dharam Nagar | Kailashahar | Kamal Krishnabari | Khopaiyapara | Khowai | Phuldungsei | Radha Kishore Pur | Tripura ";
			s_a[33]=" Achhnera | Agra | Akbarpur | Aliganj | Aligarh | Allahabad | Ambedkar Nagar | Amethi | Amiliya | Amroha | Anola | Atrauli | Auraiya | Azamgarh | Baberu | Badaun | Baghpat | Bagpat | Baheri | Bahraich | Ballia | Balrampur | Banda | Bansdeeh | Bansgaon | Bansi | Barabanki | Bareilly | Basti | Bhadohi | Bharthana | Bharwari | Bhogaon | Bhognipur | Bidhuna | Bijnore | Bikapur | Bilari | Bilgram | Bilhaur | Bindki | Bisalpur | Bisauli | Biswan | Budaun | Budhana | Bulandshahar | Bulandshahr | Capianganj | Chakia | Chandauli | Charkhari | Chhata | Chhibramau | Chirgaon | Chitrakoot | Chunur | Dadri | Dalmau | Dataganj | Debai | Deoband | Deoria | Derapur | Dhampur | Domariyaganj | Dudhi | Etah | Etawah | Faizabad | Farrukhabad | Fatehpur | Firozabad | Garauth | Garhmukteshwar | Gautam Buddha Nagar | Ghatampur | Ghaziabad | Ghazipur | Ghosi | Gonda | Gorakhpur | Gunnaur | Haidergarh | Hamirpur | Hapur | Hardoi | Harraiya | Hasanganj | Hasanpur | Hathras | Jalalabad | Jalaun | Jalesar | Jansath | Jarar | Jasrana | Jaunpur | Jhansi | Jyotiba Phule Nagar | Kadipur | Kaimganj | Kairana | Kaisarganj | Kalpi | Kannauj | Kanpur | Karchhana | Karhal | Karvi | Kasganj | Kaushambi | Kerakat | Khaga | Khair | Khalilabad | Kheri | Konch | Kumaon | Kunda | Kushinagar | Lalganj | Lalitpur | Lucknow | Machlishahar | Maharajganj | Mahoba | Mainpuri | Malihabad | Mariyahu | Math | Mathura | Mau | Maudaha | Maunathbhanjan | Mauranipur | Mawana | Meerut | Mehraun | Meja | Mirzapur | Misrikh | Modinagar | Mohamdabad | Mohamdi | Moradabad | Musafirkhana | Muzaffarnagar | Nagina | Najibabad | Nakur | Nanpara | Naraini | Naugarh | Nawabganj | Nighasan | Noida | Orai | Padrauna | Pahasu | Patti | Pharenda | Phoolpur | Phulpur | Pilibhit | Pitamberpur | Powayan | Pratapgarh | Puranpur | Purwa | Raibareli | Rampur | Ramsanehi Ghat | Rasara | Rath | Robertsganj | Sadabad | Safipur | Sagri | Saharanpur | Sahaswan | Sahjahanpur | Saidpur | Salempur | Salon | Sambhal | Sandila | Sant Kabir Nagar | Sant Ravidas Nagar | Sardhana | Shahabad | Shahganj | Shahjahanpur | Shikohabad | Shravasti | Siddharthnagar | Sidhauli | Sikandra Rao | Sikandrabad | Sitapur | Siyana | Sonbhadra | Soraon | Sultanpur | Tanda | Tarabganj | Tilhar | Unnao | Utraula | Varanasi | Zamania ";
			s_a[34]=" Almora | Bageshwar | Bhatwari | Chakrata | Chamoli | Champawat | Dehradun | Deoprayag | Dharchula | Dunda | Haldwani | Haridwar | Joshimath | Karan Prayag | Kashipur | Khatima | Kichha | Lansdown | Munsiari | Mussoorie | Nainital | Pantnagar | Partapnagar | Pauri Garhwal | Pithoragarh | Purola | Rajgarh | Ranikhet | Roorkee | Rudraprayag | Tehri Garhwal | Udham Singh Nagar | Ukhimath | Uttarkashi ";
			s_a[35]=" Adra | Alipurduar | Amlagora | Arambagh | Asansol | Balurghat | Bankura | Bardhaman | Basirhat | Berhampur | Bethuadahari | Birbhum | Birpara | Bishanpur | Bolpur | Bongoan | Bulbulchandi | Burdwan | Calcutta | Canning | Champadanga | Contai | Cooch Behar | Daimond Harbour | Dalkhola | Dantan | Darjeeling | Dhaniakhali | Dhuliyan | Dinajpur | Dinhata | Durgapur | Gangajalghati | Gangarampur | Ghatal | Guskara | Habra | Haldia | Harirampur | Harishchandrapur | Hooghly | Howrah | Islampur | Jagatballavpur | Jalpaiguri | Jhalda | Jhargram | Kakdwip | Kalchini | Kalimpong | Kalna | Kandi | Karimpur | Katwa | Kharagpur | Khatra | Krishnanagar | Mal Bazar | Malda | Manbazar | Mathabhanga | Medinipur | Mekhliganj | Mirzapur | Murshidabad | Nadia | Nagarakata | Nalhati | Nayagarh | Parganas | Purulia | Raiganj | Rampur Hat | Ranaghat | Seharabazar | Siliguri | Suri | Takipur | Tamluk";
			
			function print_state2(state_id,currentState){
				
				// given the id of the <select> tag as function argument, it inserts <option> tags
				var option_str = document.getElementById(state_id);
				option_str.length=0;
				option_str.options[0] = new Option('Select State','');
				option_str.selectedIndex = 0;
				for (var i=0; i<state_arr2.length; i++) {
					if(currentState == state_arr[i])
					{
						option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i],'defaultSelected','selected');
					}
					else
					{
						option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
					}
				}
			}
			
			function print_city2(city_id, city_index){
				var option_str = document.getElementById(city_id);
				option_str.length=0;	// Fixed by Julian Woods
				option_str.options[0] = new Option('Select City','');
				option_str.selectedIndex = 0;
				var city_arr = s_a[city_index].split("|");
				for (var i=0; i<city_arr.length; i++) {
					option_str.options[option_str.length] = new Option(city_arr[i],city_arr[i]);
				}
			}
			
			$('#updateForm2').on('submit', function(e) {
				e.preventDefault();
				var data = new FormData(this);
				var formAction = $(this);
				var btnAction = $('#updateBtn2');
				var spinAction = $('#updateSpin2');
				if ($(formAction).parsley().isValid() == true) {
					$.ajax({
						type: 'POST',
						url: $(formAction).attr('action'),
						data: data,
						cache: false,
						contentType: false,
						processData: false,
						beforeSend: function() {
							$(btnAction).attr("disabled", true);
							$(spinAction).show();
						},
						success: function(response) {
							console.log(response);
							var response = JSON.parse(response);
							$(btnAction).removeAttr("disabled");
							$(spinAction).hide();
							if (response[0].res == 'success') {
								$('.notifyjs-wrapper').remove();
								$.notify("" + response[0].msg + "", "success");
								if (response[0].redirect) {
									window.setTimeout(function() {
										window.location.href = response[0].redirect;
									}, 1000);
									} else {
									window.setTimeout(function() {
										window.location.reload();
									}, 1000);
								}
								} else if (response[0].res == 'error') {
								$('.notifyjs-wrapper').remove();
								$.notify("" + response[0].msg + "", "error");
							}
						},
						error: function() {
							window.location.reload();
						}
					});
				}
			});
		</script>
		<?php 
			break; 
		case "EditShippingAddress"; ?>
		<form action="<?php echo base_url($this->data->method.'/UpdateAddress/'.$list[0]->id); ?>" method="post" enctype="multipart/form-data" id="updateForm2">
			<input type="hidden" name="id" value="<?php echo $list[0]->id; ?>" />
			<input type="hidden" name="orderid" value="<?php echo $orderid ?>" />
			<div class="form-group">
				<label>Shipping details will be sent to: <span class="text-danger">*</span></label> 
				<input type="text" required name="name" value="<?php echo $list[0]->name; ?>" class="form-control" placeholder="Full Name" data-parsley-required-message="Please enter full name">
			</div>
			<div class="form-group">
				<label>Choose State <span class="text-danger">*</span></label>
				<select onchange="print_city2('Cities', this.selectedIndex);" id="states" name ="state" class="form-control" required data-parsley-required-message="Please select state">
					<option value="<?php echo $list[0]->state; ?>"><?php echo $list[0]->state; ?></option>
				</select>
			</div>
			<div class="form-group">
				<label>Choose City <span class="text-danger">*</span></label>
				<select id ="Cities" name="city" class="form-control" required data-parsley-required-message="Please select city">
					<option value="<?php echo $list[0]->city; ?>"><?php echo $list[0]->city; ?></option>
				</select>
			</div>
			<div class="form-group">
				<label>Pin Code <span class="text-danger">*</span></label> 
				<input type="number" name="pincode" value="<?php echo $list[0]->pincode; ?>" class="form-control" placeholder="pincode"required data-parsley-required-message="Please enter pin">
			</div>
			<div class="form-group">
				<label>Flat/House No./Building<span class="text-danger">*</span></label> 
				<input type="text" name="addressline1" value="<?php echo $list[0]->line1; ?>" class="form-control" placeholder="Flat/House No./Building*" required data-parsley-required-message="Please enter Flat/House No./Building">
			</div>
			<div class="form-group">
				<label>Area/Locality<span class="text-danger">*</span></label> 
				<input type="text" name="addressline2" value="<?php echo $list[0]->line2; ?>" class="form-control"   placeholder="Area/Locality*" required data-parsley-required-message="Please enter Area/Locality">
			</div>
			<div class="form-group">
				<label>Landmark<span class="text-danger">(Optional)</span></label> 
				<input type="text" name="addressline3" class="form-control" value="<?php echo $list[0]->line3; ?>"  placeholder="Landmark" >
			</div>
			<div class="form-group">
				<label>Phone Number<span class="text-danger">*</span></label> 
				<input type="number" name="mobile" value="<?php echo $list[0]->mobile; ?>" class="form-control" placeholder="mobile number" required required data-parsley-required-message="Please enter mobile number." parsley-trigger="keyup" data-parsley-pattern-message="Please enter a valid Indian mobile number." pattern="/^(?:(?:\+|0{0,2})91(\s*|[\-])?|[0]?)?([6789]\d{2}([ -]?)\d{3}([ -]?)\d{4})$/" maxlength="10" oninput="this.value=this.value.slice(0,this.maxLength)">
			</div>
			<div class="form-group">
				<label>Alternate No.<span class="text-danger">(optional)</span></label> 
				<input type="number" name="alternate_mobile" class="form-control" value="<?php echo $list[0]->alternate_mobile; ?>" placeholder="mobile number" parsley-trigger="keyup" data-parsley-pattern-message="Please enter a valid Indian mobile number." pattern="/^(?:(?:\+|0{0,2})91(\s*|[\-])?|[0]?)?([6789]\d{2}([ -]?)\d{3}([ -]?)\d{4})$/" maxlength="10" oninput="this.value=this.value.slice(0,this.maxLength)" >
			</div>
			<div class="form-group">
				<label>Address Type<span class="text-danger">*</span></label>  <br>
				<input type="radio"  checked="<?php if($list[0]->address_type == 'home'){echo 'checked';}?>"  required name="addresstype" id="Home" value="home" data-parsley-required-message="Please select address type" > <label for="Home">Home</label>
				&emsp;<input type="radio" checked="<?php if($list[0]->address_type == 'work'){echo 'checked';}?>"  required name="addresstype" id="Work"  value="work"> <label for="Work">Work</label>
			</div>
			<div class="form-group">
				<input type="checkbox" <?php if($list[0]->default_address == 'true'){echo 'checked';}?> name="defaultaddress" for="" id="chebox" >
				<label for="chebox">Use this as your Default Address<span class="text-danger"></span></label> 
			</div>
			<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
			value="<?= $this->security->get_csrf_hash(); ?>" />
			<button type="submit" class="btn btn-secondary" id="updateBtn2"> <i class="fa fa-check-circle"></i>  Submit <i class="fa fa-spin fa-spinner" id="updateSpin2" style="display:none;"></i></button>
		</form>
		<script>
			
			jQuery( document ).ready(function() {
				print_state2('states','<?php echo $list[0]->state; ?>');
			});
			
			var state_arr2 = new Array("Andaman & Nicobar", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra & Nagar Haveli", "Daman & Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu & Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttar Pradesh", "Uttaranchal", "West Bengal");
			
			var s_a = new Array();
			s_a[0]="";
			s_a[1]=" Alipur | Andaman Island | Anderson Island | Arainj-Laka-Punga | Austinabad | Bamboo Flat | Barren Island | Beadonabad | Betapur | Bindraban | Bonington | Brookesabad | Cadell Point | Calicut | Chetamale | Cinque Islands | Defence Island | Digilpur | Dolyganj | Flat Island | Geinyale | Great Coco Island | Haddo | Havelock Island | Henry Lawrence Island | Herbertabad | Hobdaypur | Ilichar | Ingoie | Inteview Island | Jangli Ghat | Jhon Lawrence Island | Karen | Kartara | KYD Islannd | Landfall Island | Little Andmand | Little Coco Island | Long Island | Maimyo | Malappuram | Manglutan | Manpur | Mitha Khari | Neill Island | Nicobar Island | North Brother Island | North Passage Island | North Sentinel Island | Nothen Reef Island | Outram Island | Pahlagaon | Palalankwe | Passage Island | Phaiapong | Phoenix Island | Port Blair | Preparis Island | Protheroepur | Rangachang | Rongat | Rutland Island | Sabari | Saddle Peak | Shadipur | Smith Island | Sound Island | South Sentinel Island | Spike Island | Tarmugli Island | Taylerabad | Titaije | Toibalawe | Tusonabad | West Island | Wimberleyganj | Yadita";
			s_a[2]=" Achampet | Adilabad | Adoni | Alampur | Allagadda | Alur | Amalapuram | Amangallu | Anakapalle | Anantapur | Andole | Araku | Armoor | Asifabad | Aswaraopet | Atmakur | B. Kothakota | Badvel | Banaganapalle | Bandar | Bangarupalem | Banswada | Bapatla | Bellampalli | Bhadrachalam | Bhainsa | Bheemunipatnam | Bhimadole | Bhimavaram | Bhongir | Bhooragamphad | Boath | Bobbili | Bodhan | Chandoor | Chavitidibbalu | Chejerla | Chepurupalli | Cherial | Chevella | Chinnor | Chintalapudi | Chintapalle | Chirala | Chittoor | Chodavaram | Cuddapah | Cumbum | Darsi | Devarakonda | Dharmavaram | Dichpalli | Divi | Donakonda | Dronachalam | East Godavari | Eluru | Eturnagaram | Gadwal | Gajapathinagaram | Gajwel | Garladinne | Giddalur | Godavari | Gooty | Gudivada | Gudur | Guntur | Hindupur | Hunsabad | Huzurabad | Huzurnagar | Hyderabad | Ibrahimpatnam | Jaggayyapet | Jagtial | Jammalamadugu | Jangaon | Jangareddygudem | Jannaram | Kadiri | Kaikaluru | Kakinada | Kalwakurthy | Kalyandurg | Kamalapuram | Kamareddy | Kambadur | Kanaganapalle | Kandukuru | Kanigiri | Karimnagar | Kavali | Khammam | Khanapur (AP) | Kodangal | Koduru | Koilkuntla | Kollapur | Kothagudem | Kovvur | Krishna | Krosuru | Kuppam | Kurnool | Lakkireddipalli | Madakasira | Madanapalli | Madhira | Madnur | Mahabubabad | Mahabubnagar | Mahadevapur | Makthal | Mancherial | Mandapeta | Mangalagiri | Manthani | Markapur | Marturu | Medachal | Medak | Medarmetla | Metpalli | Mriyalguda | Mulug | Mylavaram | Nagarkurnool | Nalgonda | Nallacheruvu | Nampalle | Nandigama | Nandikotkur | Nandyal | Narasampet | Narasaraopet | Narayanakhed | Narayanpet | Narsapur | Narsipatnam | Nazvidu | Nelloe | Nellore | Nidamanur | Nirmal | Nizamabad | Nuguru | Ongole | Outsarangapalle | Paderu | Pakala | Palakonda | Paland | Palmaneru | Pamuru | Pargi | Parkal | Parvathipuram | Pathapatnam | Pattikonda | Peapalle | Peddapalli | Peddapuram | Penukonda | Piduguralla | Piler | Pithapuram | Podili | Polavaram | Prakasam | Proddatur | Pulivendla | Punganur | Putturu | Rajahmundri | Rajampeta | Ramachandrapuram | Ramannapet | Rampachodavaram | Rangareddy | Rapur | Rayachoti | Rayadurg | Razole | Repalle | Saluru | Sangareddy | Sathupalli | Sattenapalle | Satyavedu | Shadnagar | Siddavattam | Siddipet | Sileru | Sircilla | Sirpur Kagaznagar | Sodam | Sompeta | Srikakulam | Srikalahasthi | Srisailam | Srungavarapukota | Sudhimalla | Sullarpet | Tadepalligudem | Tadipatri | Tanduru | Tanuku | Tekkali | Tenali | Thungaturthy | Tirivuru | Tirupathi | Tuni | Udaygiri | Ulvapadu | Uravakonda | Utnor | V.R. Puram | Vaimpalli | Vayalpad | Venkatgiri | Venkatgirikota | Vijayawada | Vikrabad | Vinjamuru | Vinukonda | Visakhapatnam | Vizayanagaram | Vizianagaram | Vuyyuru | Wanaparthy | Warangal | Wardhannapet | Yelamanchili | Yelavaram | Yeleswaram | Yellandu | Yellanuru | Yellareddy | Yerragondapalem | Zahirabad ";
			s_a[3]=" Along | Anini | Anjaw | Bameng | Basar | Changlang | Chowkhem | Daporizo | Dibang Valley | Dirang | Hayuliang | Huri | Itanagar | Jairampur | Kalaktung | Kameng | Khonsa | Kolaring | Kurung Kumey | Lohit | Lower Dibang Valley | Lower Subansiri | Mariyang | Mechuka | Miao | Nefra | Pakkekesang | Pangin | Papum Pare | Passighat | Roing | Sagalee | Seppa | Siang | Tali | Taliha | Tawang | Tezu | Tirap | Tuting | Upper Siang | Upper Subansiri | Yiang Kiag ";
			s_a[4]=" Abhayapuri | Baithalangshu | Barama | Barpeta Road | Bihupuria | Bijni | Bilasipara | Bokajan | Bokakhat | Boko | Bongaigaon | Cachar | Cachar Hills | Darrang | Dhakuakhana | Dhemaji | Dhubri | Dibrugarh | Digboi | Diphu | Goalpara | Gohpur | Golaghat | Guwahati | Hailakandi | Hajo | Halflong | Hojai | Howraghat | Jorhat | Kamrup | Karbi Anglong | Karimganj | Kokarajhar | Kokrajhar | Lakhimpur | Maibong | Majuli | Mangaldoi | Mariani | Marigaon | Moranhat | Morigaon | Nagaon | Nalbari | Rangapara | Sadiya | Sibsagar | Silchar | Sivasagar | Sonitpur | Tarabarihat | Tezpur | Tinsukia | Udalgiri | Udalguri | UdarbondhBarpeta";
			s_a[5]=" Adhaura | Amarpur | Araria | Areraj | Arrah | Arwal | Aurangabad | Bagaha | Banka | Banmankhi | Barachakia | Barauni | Barh | Barosi | Begusarai | Benipatti | Benipur | Bettiah | Bhabhua | Bhagalpur | Bhojpur | Bidupur | Biharsharif | Bikram | Bikramganj | Birpur | Buxar | Chakai | Champaran | Chapara | Dalsinghsarai | Danapur | Darbhanga | Daudnagar | Dhaka | Dhamdaha | Dumraon | Ekma | Forbesganj | Gaya | Gogri | Gopalganj | H.Kharagpur | Hajipur | Hathua | Hilsa | Imamganj | Jahanabad | Jainagar | Jamshedpur | Jamui | Jehanabad | Jhajha | Jhanjharpur | Kahalgaon | Kaimur (Bhabua) | Katihar | Katoria | Khagaria | Kishanganj | Korha | Lakhisarai | Madhepura | Madhubani | Maharajganj | Mahua | Mairwa | Mallehpur | Masrakh | Mohania | Monghyr | Motihari | Motipur | Munger | Muzaffarpur | Nabinagar | Nalanda | Narkatiaganj | Naugachia | Nawada | Pakribarwan | Pakridayal | Patna | Phulparas | Piro | Pupri | Purena | Purnia | Rafiganj | Rajauli | Ramnagar | Raniganj | Raxaul | Rohtas | Rosera | S.Bakhtiarpur | Saharsa | Samastipur | Saran | Sasaram | Seikhpura | Sheikhpura | Sheohar | Sherghati | Sidhawalia | Singhwara | Sitamarhi | Siwan | Sonepur | Supaul | Thakurganj | Triveniganj | Udakishanganj | Vaishali | Wazirganj";
			s_a[6]=" Chandigarh | Mani Marja";
			s_a[7]=" Ambikapur | Antagarh | Arang | Bacheli | Bagbahera | Bagicha | Baikunthpur | Balod | Balodabazar | Balrampur | Barpalli | Basana | Bastanar | Bastar | Bderajpur | Bemetara | Berla | Bhairongarh | Bhanupratappur | Bharathpur | Bhatapara | Bhilai | Bhilaigarh | Bhopalpatnam | Bijapur | Bilaspur | Bodla | Bokaband | Chandipara | Chhinagarh | Chhuriakala | Chingmut | Chuikhadan | Dabhara | Dallirajhara | Dantewada | Deobhog | Dhamda | Dhamtari | Dharamjaigarh | Dongargarh | Durg | Durgakondal | Fingeshwar | Gariaband | Garpa | Gharghoda | Gogunda | Ilamidi | Jagdalpur | Janjgir | Janjgir-Champa | Jarwa | Jashpur | Jashpurnagar | Kabirdham-Kawardha | Kanker | Kasdol | Kathdol | Kathghora | Kawardha | Keskal | Khairgarh | Kondagaon | Konta | Korba | Korea | Kota | Koyelibeda | Kuakunda | Kunkuri | Kurud | Lohadigundah | Lormi | Luckwada | Mahasamund | Makodi | Manendragarh | Manpur | Marwahi | Mohla | Mungeli | Nagri | Narainpur | Narayanpur | Neora | Netanar | Odgi | Padamkot | Pakhanjur | Pali | Pandaria | Pandishankar | Parasgaon | Pasan | Patan | Pathalgaon | Pendra | Pratappur | Premnagar | Raigarh | Raipur | Rajnandgaon | Rajpur | Ramchandrapur | Saraipali | Saranggarh | Sarona | Semaria | Shakti | Sitapur | Sukma | Surajpur | Surguja | Tapkara | Toynar | Udaipur | Uproda | Wadrainagar";
			s_a[8]=" Amal | Amli | Bedpa | Chikhli | Dadra & Nagar Haveli | Dahikhed | Dolara | Galonda | Kanadi | Karchond | Khadoli | Kharadpada | Kherabari | Kherdi | Kothar | Luari | Mashat | Rakholi | Rudana | Saili | Sili | Silvassa | Sindavni | Udva | Umbarkoi | Vansda | Vasona | Velugam ";
			s_a[9]=" Brancavare | Dagasi | Daman | Diu | Magarvara | Nagwa | Pariali | Passo Covo ";
			s_a[10]=" Central Delhi | East Delhi | New Delhi | North Delhi | North East Delhi | North West Delhi | South Delhi | South West Delhi | West Delhi ";
			s_a[11]=" Canacona | Candolim | Chinchinim | Cortalim | Goa | Jua | Madgaon | Mahem | Mapuca | Marmagao | Panji | Ponda | Sanvordem | Terekhol ";
			s_a[12]=" Ahmedabad | Ahwa | Amod | Amreli | Anand | Anjar | Ankaleshwar | Babra | Balasinor | Banaskantha | Bansada | Bardoli | Bareja | Baroda | Barwala | Bayad | Bhachav | Bhanvad | Bharuch | Bhavnagar | Bhiloda | Bhuj | Billimora | Borsad | Botad | Chanasma | Chhota Udaipur | Chotila | Dabhoi | Dahod | Damnagar | Dang | Danta | Dasada | Dediapada | Deesa | Dehgam | Deodar | Devgadhbaria | Dhandhuka | Dhanera | Dharampur | Dhari | Dholka | Dhoraji | Dhrangadhra | Dhrol | Dwarka | Fortsongadh | Gadhada | Gandhi Nagar | Gariadhar | Godhra | Gogodar | Gondal | Halol | Halvad | Harij | Himatnagar | Idar | Jambusar | Jamjodhpur | Jamkalyanpur | Jamnagar | Jasdan | Jetpur | Jhagadia | Jhalod | Jodia | Junagadh | Junagarh | Kalawad | Kalol | Kapad Wanj | Keshod | Khambat | Khambhalia | Khavda | Kheda | Khedbrahma | Kheralu | Kodinar | Kotdasanghani | Kunkawav | Kutch | Kutchmandvi | Kutiyana | Lakhpat | Lakhtar | Lalpur | Limbdi | Limkheda | Lunavada | M.M.Mangrol | Mahuva | Malia-Hatina | Maliya | Malpur | Manavadar | Mandvi | Mangrol | Mehmedabad | Mehsana | Miyagam | Modasa | Morvi | Muli | Mundra | Nadiad | Nakhatrana | Nalia | Narmada | Naswadi | Navasari | Nizar | Okha | Paddhari | Padra | Palanpur | Palitana | Panchmahals | Patan | Pavijetpur | Porbandar | Prantij | Radhanpur | Rahpar | Rajaula | Rajkot | Rajpipla | Ranavav | Sabarkantha | Sanand | Sankheda | Santalpur | Santrampur | Savarkundla | Savli | Sayan | Sayla | Shehra | Sidhpur | Sihor | Sojitra | Sumrasar | Surat | Surendranagar | Talaja | Thara | Tharad | Thasra | Una-Diu | Upleta | Vadgam | Vadodara | Valia | Vallabhipur | Valod | Valsad | Vanthali | Vapi | Vav | Veraval | Vijapur | Viramgam | Visavadar | Visnagar | Vyara | Waghodia | Wankaner ";
			s_a[13]=" Adampur Mandi | Ambala | Assandh | Bahadurgarh | Barara | Barwala | Bawal | Bawanikhera | Bhiwani | Charkhidadri | Cheeka | Chhachrauli | Dabwali | Ellenabad | Faridabad | Fatehabad | Ferojpur Jhirka | Gharaunda | Gohana | Gurgaon | Hansi | Hisar | Jagadhari | Jatusana | Jhajjar | Jind | Julana | Kaithal | Kalanaur | Kalanwali | Kalka | Karnal | Kosli | Kurukshetra | Loharu | Mahendragarh | Meham | Mewat | Mohindergarh | Naraingarh | Narnaul | Narwana | Nilokheri | Nuh | Palwal | Panchkula | Panipat | Pehowa | Ratia | Rewari | Rohtak | Safidon | Sirsa | Siwani | Sonipat | Tohana | Tohsam | Yamunanagar ";
			s_a[14]=" Amb | Arki | Banjar | Bharmour | Bilaspur | Chamba | Churah | Dalhousie | Dehra Gopipur | Hamirpur | Jogindernagar | Kalpa | Kangra | Kinnaur | Kullu | Lahaul | Mandi | Nahan | Nalagarh | Nirmand | Nurpur | Palampur | Pangi | Paonta | Pooh | Rajgarh | Rampur Bushahar | Rohru | Shimla | Sirmaur | Solan | Spiti | Sundernagar | Theog | Udaipur | Una";
			s_a[15]=" Akhnoor | Anantnag | Badgam | Bandipur | Baramulla | Basholi | Bedarwah | Budgam | Doda | Gulmarg | Jammu | Kalakot | Kargil | Karnah | Kathua | Kishtwar | Kulgam | Kupwara | Leh | Mahore | Nagrota | Nobra | Nowshera | Nyoma | Padam | Pahalgam | Patnitop | Poonch | Pulwama | Rajouri | Ramban | Ramnagar | Reasi | Samba | Srinagar | Udhampur | Vaishno Devi ";
			s_a[16]=" Bagodar | Baharagora | Balumath | Barhi | Barkagaon | Barwadih | Basia | Bermo | Bhandaria | Bhawanathpur | Bishrampur | Bokaro | Bolwa | Bundu | Chaibasa | Chainpur | Chakardharpur | Chandil | Chatra | Chavparan | Daltonganj | Deoghar | Dhanbad | Dumka | Dumri | Garhwa | Garu | Ghaghra | Ghatsila | Giridih | Godda | Gomia | Govindpur | Gumla | Hazaribagh | Hunterganj | Ichak | Itki | Jagarnathpur | Jamshedpur | Jamtara | Japla | Jharmundi | Jhinkpani | Jhumaritalaiya | Kathikund | Kharsawa | Khunti | Koderma | Kolebira | Latehar | Lohardaga | Madhupur | Mahagama | Maheshpur Raj | Mandar | Mandu | Manoharpur | Muri | Nagarutatri | Nala | Noamundi | Pakur | Palamu | Palkot | Patan | Rajdhanwar | Rajmahal | Ramgarh | Ranchi | Sahibganj | Saraikela | Simaria | Simdega | Singhbhum | Tisri | Torpa ";
			s_a[17]=" Afzalpur | Ainapur | Aland | Alur | Anekal | Ankola | Arsikere | Athani | Aurad | Bableshwar | Badami | Bagalkot | Bagepalli | Bailhongal | Bangalore | Bangalore Rural | Bangarpet | Bantwal | Basavakalyan | Basavanabagewadi | Basavapatna | Belgaum | Bellary | Belthangady | Belur | Bhadravati | Bhalki | Bhatkal | Bidar | Bijapur | Biligi | Chadchan | Challakere | Chamrajnagar | Channagiri | Channapatna | Channarayapatna | Chickmagalur | Chikballapur | Chikkaballapur | Chikkanayakanahalli | Chikkodi | Chikmagalur | Chincholi | Chintamani | Chitradurga | Chittapur | Cowdahalli | Davanagere | Deodurga | Devangere | Devarahippargi | Dharwad | Doddaballapur | Gadag | Gangavathi | Gokak | Gowribdanpur | Gubbi | Gulbarga | Gundlupet | H.B.Halli | H.D. Kote | Haliyal | Hampi | Hangal | Harapanahalli | Hassan | Haveri | Hebri | Hirekerur | Hiriyur | Holalkere | Holenarsipur | Honnali | Honnavar | Hosadurga | Hosakote | Hosanagara | Hospet | Hubli | Hukkeri | Humnabad | Hungund | Hunsagi | Hunsur | Huvinahadagali | Indi | Jagalur | Jamkhandi | Jewargi | Joida | K.R. Nagar | Kadur | Kalghatagi | Kamalapur | Kanakapura | Kannada | Kargal | Karkala | Karwar | Khanapur | Kodagu | Kolar | Kollegal | Koppa | Koppal | Koratageri | Krishnarajapet | Kudligi | Kumta | Kundapur | Kundgol | Kunigal | Kurugodu | Kustagi | Lingsugur | Madikeri | Madugiri | Malavalli | Malur | Mandya | Mangalore | Manipal | Manvi | Mashal | Molkalmuru | Mudalgi | Muddebihal | Mudhol | Mudigere | Mulbagal | Mundagod | Mundargi | Murugod | Mysore | Nagamangala | Nanjangud | Nargund | Narsimrajapur | Navalgund | Nelamangala | Nimburga | Pandavapura | Pavagada | Puttur | Raibag | Raichur | Ramdurg | Ranebennur | Ron | Sagar | Sakleshpur | Salkani | Sandur | Saundatti | Savanur | Sedam | Shahapur | Shankarnarayana | Shikaripura | Shimoga | Shirahatti | Shorapur | Siddapur | Sidlaghatta | Sindagi | Sindhanur | Sira | Sirsi | Siruguppa | Somwarpet | Sorab | Sringeri | Sriniwaspur | Srirangapatna | Sullia | T. Narsipur | Tallak | Tarikere | Telgi | Thirthahalli | Tiptur | Tumkur | Turuvekere | Udupi | Virajpet | Wadi | Yadgiri | Yelburga | Yellapur ";
			s_a[18]=" Adimaly | Adoor | Agathy | Alappuzha | Alathur | Alleppey | Alwaye | Amini | Androth | Attingal | Badagara | Bitra | Calicut | Cannanore | Chetlet | Ernakulam | Idukki | Irinjalakuda | Kadamath | Kalpeni | Kalpetta | Kanhangad | Kanjirapally | Kannur | Karungapally | Kasargode | Kavarathy | Kiltan | Kochi | Koduvayur | Kollam | Kottayam | Kovalam | Kozhikode | Kunnamkulam | Malappuram | Mananthodi | Manjeri | Mannarghat | Mavelikkara | Minicoy | Munnar | Muvattupuzha | Nedumandad | Nedumgandam | Nilambur | Palai | Palakkad | Palghat | Pathaanamthitta | Pathanamthitta | Payyanur | Peermedu | Perinthalmanna | Perumbavoor | Punalur | Quilon | Ranni | Shertallai | Shoranur | Taliparamba | Tellicherry | Thiruvananthapuram | Thodupuzha | Thrissur | Tirur | Tiruvalla | Trichur | Trivandrum | Uppala | Vadakkanchery | Vikom | Wayanad ";
			s_a[19]=" Agatti Island | Bingaram Island | Bitra Island | Chetlat Island | Kadmat Island | Kalpeni Island | Kavaratti Island | Kiltan Island | Lakshadweep Sea | Minicoy Island | North Island | South Island ";
			s_a[20]=" Agar | Ajaigarh | Alirajpur | Amarpatan | Amarwada | Ambah | Anuppur | Arone | Ashoknagar | Ashta | Atner | Babaichichli | Badamalhera | Badarwsas | Badnagar | Badnawar | Badwani | Bagli | Baihar | Balaghat | Baldeogarh | Baldi | Bamori | Banda | Bandhavgarh | Bareli | Baroda | Barwaha | Barwani | Batkakhapa | Begamganj | Beohari | Berasia | Berchha | Betul | Bhainsdehi | Bhander | Bhanpura | Bhikangaon | Bhimpur | Bhind | Bhitarwar | Bhopal | Biaora | Bijadandi | Bijawar | Bijaypur | Bina | Birsa | Birsinghpur | Budhni | Burhanpur | Buxwaha | Chachaura | Chanderi | Chaurai | Chhapara | Chhatarpur | Chhindwara | Chicholi | Chitrangi | Churhat | Dabra | Damoh | Datia | Deori | Deosar | Depalpur | Dewas | Dhar | Dharampuri | Dindori | Gadarwara | Gairatganj | Ganjbasoda | Garoth | Ghansour | Ghatia | Ghatigaon | Ghorandogri | Ghughari | Gogaon | Gohad | Goharganj | Gopalganj | Gotegaon | Gourihar | Guna | Gunnore | Gwalior | Gyraspur | Hanumana | Harda | Harrai | Harsud | Hatta | Hoshangabad | Ichhawar | Indore | Isagarh | Itarsi | Jabalpur | Jabera | Jagdalpur | Jaisinghnagar | Jaithari | Jaitpur | Jaitwara | Jamai | Jaora | Jatara | Jawad | Jhabua | Jobat | Jora | Kakaiya | Kannod | Kannodi | Karanjia | Kareli | Karera | Karhal | Karpa | Kasrawad | Katangi | Katni | Keolari | Khachrod | Khajuraho | Khakner | Khalwa | Khandwa | Khaniadhana | Khargone | Khategaon | Khetia | Khilchipur | Khirkiya | Khurai | Kolaras | Kotma | Kukshi | Kundam | Kurwai | Kusmi | Laher | Lakhnadon | Lamta | Lanji | Lateri | Laundi | Maheshwar | Mahidpurcity | Maihar | Majhagwan | Majholi | Malhargarh | Manasa | Manawar | Mandla | Mandsaur | Manpur | Mauganj | Mawai | Mehgaon | Mhow | Morena | Multai | Mungaoli | Nagod | Nainpur | Narsingarh | Narsinghpur | Narwar | Nasrullaganj | Nateran | Neemuch | Niwari | Niwas | Nowgaon | Pachmarhi | Pandhana | Pandhurna | Panna | Parasia | Patan | Patera | Patharia | Pawai | Petlawad | Pichhore | Piparia | Pohari | Prabhapattan | Punasa | Pushprajgarh | Raghogarh | Raghunathpur | Rahatgarh | Raisen | Rajgarh | Rajpur | Ratlam | Rehli | Rewa | Sabalgarh | Sagar | Sailana | Sanwer | Sarangpur | Sardarpur | Satna | Saunsar | Sehore | Sendhwa | Seondha | Seoni | Seonimalwa | Shahdol | Shahnagar | Shahpur | Shajapur | Sheopur | Sheopurkalan | Shivpuri | Shujalpur | Sidhi | Sihora | Silwani | Singrauli | Sirmour | Sironj | Sitamau | Sohagpur | Sondhwa | Sonkatch | Susner | Tamia | Tarana | Tendukheda | Teonthar | Thandla | Tikamgarh | Timarani | Udaipura | Ujjain | Umaria | Umariapan | Vidisha | Vijayraghogarh | Waraseoni | Zhirnia ";
			s_a[21]=" Achalpur | Aheri | Ahmednagar | Ahmedpur | Ajara | Akkalkot | Akola | Akole | Akot | Alibagh | Amagaon | Amalner | Ambad | Ambejogai | Amravati | Arjuni Merogaon | Arvi | Ashti | Atpadi | Aurangabad | Ausa | Babhulgaon | Balapur | Baramati | Barshi Takli | Barsi | Basmatnagar | Bassein | Beed | Bhadrawati | Bhamregadh | Bhandara | Bhir | Bhiwandi | Bhiwapur | Bhokar | Bhokardan | Bhoom | Bhor | Bhudargad | Bhusawal | Billoli | Brahmapuri | Buldhana | Butibori | Chalisgaon | Chamorshi | Chandgad | Chandrapur | Chandur | Chanwad | Chhikaldara | Chikhali | Chinchwad | Chiplun | Chopda | Chumur | Dahanu | Dapoli | Darwaha | Daryapur | Daund | Degloor | Delhi Tanda | Deogad | Deolgaonraja | Deori | Desaiganj | Dhadgaon | Dhanora | Dharani | Dhiwadi | Dhule | Dhulia | Digras | Dindori | Edalabad | Erandul | Etapalli | Gadhchiroli | Gadhinglaj | Gaganbavada | Gangakhed | Gangapur | Gevrai | Ghatanji | Golegaon | Gondia | Gondpipri | Goregaon | Guhagar | Hadgaon | Hatkangale | Hinganghat | Hingoli | Hingua | Igatpuri | Indapur | Islampur | Jalgaon | Jalna | Jamkhed | Jamner | Jath | Jawahar | Jintdor | Junnar | Kagal | Kaij | Kalamb | Kalamnuri | Kallam | Kalmeshwar | Kalwan | Kalyan | Kamptee | Kandhar | Kankavali | Kannad | Karad | Karjat | Karmala | Katol | Kavathemankal | Kedgaon | Khadakwasala | Khamgaon | Khed | Khopoli | Khultabad | Kinwat | Kolhapur | Kopargaon | Koregaon | Kudal | Kuhi | Kurkheda | Kusumba | Lakhandur | Langa | Latur | Lonar | Lonavala | Madangad | Madha | Mahabaleshwar | Mahad | Mahagaon | Mahasala | Mahaswad | Malegaon | Malgaon | Malgund | Malkapur | Malsuras | Malwan | Mancher | Mangalwedha | Mangaon | Mangrulpur | Manjalegaon | Manmad | Maregaon | Mehda | Mekhar | Mohadi | Mohol | Mokhada | Morshi | Mouda | Mukhed | Mul | Mumbai | Murbad | Murtizapur | Murud | Nagbhir | Nagpur | Nahavara | Nanded | Nandgaon | Nandnva | Nandurbar | Narkhed | Nashik | Navapur | Ner | Newasa | Nilanga | Niphad | Omerga | Osmanabad | Pachora | Paithan | Palghar | Pali | Pandharkawada | Pandharpur | Panhala | Paranda | Parbhani | Parner | Parola | Parseoni | Partur | Patan | Pathardi | Pathari | Patoda | Pauni | Peint | Pen | Phaltan | Pimpalner | Pirangut | Poladpur | Pune | Pusad | Pusegaon | Radhanagar | Rahuri | Raigad | Rajapur | Rajgurunagar | Rajura | Ralegaon | Ramtek | Ratnagiri | Raver | Risod | Roha | Sakarwadi | Sakoli | Sakri | Salekasa | Samudrapur | Sangamner | Sanganeshwar | Sangli | Sangola | Sanguem | Saoner | Saswad | Satana | Satara | Sawantwadi | Seloo | Shahada | Shahapur | Shahuwadi | Shevgaon | Shirala | Shirol | Shirpur | Shirur | Shirwal | Sholapur | Shri Rampur | Shrigonda | Shrivardhan | Sillod | Sinderwahi | Sindhudurg | Sindkheda | Sindkhedaraja | Sinnar | Sironcha | Soyegaon | Surgena | Talasari | Talegaon S.Ji Pant | Taloda | Tasgaon | Thane | Tirora | Tiwasa | Trimbak | Tuljapur | Tumsar | Udgir | Umarkhed | Umrane | Umrer | Urlikanchan | Vaduj | Velhe | Vengurla | Vijapur | Vita | Wada | Wai | Walchandnagar | Wani | Wardha | Warlydwarud | Warora | Washim | Wathar | Yavatmal | Yawal | Yeola | Yeotmal ";
			s_a[22]=" Bishnupur | Chakpikarong | Chandel | Chattrik | Churachandpur | Imphal | Jiribam | Kakching | Kalapahar | Mao | Mulam | Parbung | Sadarhills | Saibom | Sempang | Senapati | Sochumer | Taloulong | Tamenglong | Thinghat | Thoubal | Ukhrul ";
			s_a[23]=" Amlaren | Baghmara | Cherrapunjee | Dadengiri | Garo Hills | Jaintia Hills | Jowai | Khasi Hills | Khliehriat | Mariang | Mawkyrwat | Nongpoh | Nongstoin | Resubelpara | Ri Bhoi | Shillong | Tura | Williamnagar";
			s_a[24]=" Aizawl | Champhai | Demagiri | Kolasib | Lawngtlai | Lunglei | Mamit | Saiha | Serchhip";
			s_a[25]=" Dimapur | Jalukie | Kiphire | Kohima | Mokokchung | Mon | Phek | Tuensang | Wokha | Zunheboto ";
			s_a[26]=" Anandapur | Angul | Anugul | Aska | Athgarh | Athmallik | Attabira | Bagdihi | Balangir | Balasore | Baleswar | Baliguda | Balugaon | Banaigarh | Bangiriposi | Barbil | Bargarh | Baripada | Barkot | Basta | Berhampur | Betanati | Bhadrak | Bhanjanagar | Bhawanipatna | Bhubaneswar | Birmaharajpur | Bisam Cuttack | Boriguma | Boudh | Buguda | Chandbali | Chhatrapur | Chhendipada | Cuttack | Daringbadi | Daspalla | Deodgarh | Deogarh | Dhanmandal | Dharamgarh | Dhenkanal | Digapahandi | Dunguripali | G. Udayagiri | Gajapati | Ganjam | Ghatgaon | Gudari | Gunupur | Hemgiri | Hindol | Jagatsinghapur | Jajpur | Jamankira | Jashipur | Jayapatna | Jeypur | Jharigan | Jharsuguda | Jujumura | Kalahandi | Kalimela | Kamakhyanagar | Kandhamal | Kantabhanji | Kantamal | Karanjia | Kashipur | Kendrapara | Kendujhar | Keonjhar | Khalikote | Khordha | Khurda | Komana | Koraput | Kotagarh | Kuchinda | Lahunipara | Laxmipur | M. Rampur | Malkangiri | Mathili | Mayurbhanj | Mohana | Motu | Nabarangapur | Naktideul | Nandapur | Narlaroad | Narsinghpur | Nayagarh | Nimapara | Nowparatan | Nowrangapur | Nuapada | Padampur | Paikamal | Palla Hara | Papadhandi | Parajang | Pardip | Parlakhemundi | Patnagarh | Pattamundai | Phiringia | Phulbani | Puri | Puruna Katak | R. Udayigiri | Rairakhol | Rairangpur | Rajgangpur | Rajkhariar | Rayagada | Rourkela | Sambalpur | Sohela | Sonapur | Soro | Subarnapur | Sunabeda | Sundergarh | Surada | T. Rampur | Talcher | Telkoi | Titlagarh | Tumudibandha | Udala | Umerkote ";
			s_a[27]=" Bahur | Karaikal | Mahe | Pondicherry | Purnankuppam | Valudavur | Villianur | Yanam ";
			s_a[28]=" Abohar | Ajnala | Amritsar | Balachaur | Barnala | Batala | Bathinda | Chandigarh | Dasua | Dinanagar | Faridkot | Fatehgarh Sahib | Fazilka | Ferozepur | Garhashanker | Goindwal | Gurdaspur | Guruharsahai | Hoshiarpur | Jagraon | Jalandhar | Jugial | Kapurthala | Kharar | Kotkapura | Ludhiana | Malaut | Malerkotla | Mansa | Moga | Muktasar | Nabha | Nakodar | Nangal | Nawanshahar | Nawanshahr | Pathankot | Patiala | Patti | Phagwara | Phillaur | Phulmandi | Quadian | Rajpura | Raman | Rayya | Ropar | Rupnagar | Samana | Samrala | Sangrur | Sardulgarh | Sarhind | SAS Nagar | Sultanpur Lodhi | Sunam | Tanda Urmar | Tarn Taran | Zira ";
			s_a[29]=" Abu Road | Ahore | Ajmer | Aklera | Alwar | Amber | Amet | Anupgarh | Asind | Aspur | Atru | Bagidora | Bali | Bamanwas | Banera | Bansur | Banswara | Baran | Bari | Barisadri | Barmer | Baseri | Bassi | Baswa | Bayana | Beawar | Begun | Behror | Bhadra | Bharatpur | Bhilwara | Bhim | Bhinmal | Bikaner | Bilara | Bundi | Chhabra | Chhipaborad | Chirawa | Chittorgarh | Chohtan | Churu | Dantaramgarh | Dausa | Deedwana | Deeg | Degana | Deogarh | Deoli | Desuri | Dhariawad | Dholpur | Digod | Dudu | Dungarpur | Dungla | Fatehpur | Gangapur | Gangdhar | Gerhi | Ghatol | Girwa | Gogunda | Hanumangarh | Hindaun | Hindoli | Hurda | Jahazpur | Jaipur | Jaisalmer | Jalore | Jhalawar | Jhunjhunu | Jodhpur | Kaman | Kapasan | Karauli | Kekri | Keshoraipatan | Khandar | Kherwara | Khetri | Kishanganj | Kishangarh | Kishangarhbas | Kolayat | Kota | Kotputli | Kotra | Kotri | Kumbalgarh | Kushalgarh | Ladnun | Ladpura | Lalsot | Laxmangarh | Lunkaransar | Mahuwa | Malpura | Malvi | Mandal | Mandalgarh | Mandawar | Mangrol | Marwar-Jn | Merta | Nadbai | Nagaur | Nainwa | Nasirabad | Nathdwara | Nawa | Neem Ka Thana | Newai | Nimbahera | Nohar | Nokha | Onli | Osian | Pachpadara | Pachpahar | Padampur | Pali | Parbatsar | Phagi | Phalodi | Pilani | Pindwara | Pipalda | Pirawa | Pokaran | Pratapgarh | Raipur | Raisinghnagar | Rajgarh | Rajsamand | Ramganj Mandi | Ramgarh | Rashmi | Ratangarh | Reodar | Rupbas | Sadulshahar | Sagwara | Sahabad | Salumber | Sanchore | Sangaria | Sangod | Sapotra | Sarada | Sardarshahar | Sarwar | Sawai Madhopur | Shahapura | Sheo | Sheoganj | Shergarh | Sikar | Sirohi | Siwana | Sojat | Sri Dungargarh | Sri Ganganagar | Sri Karanpur | Sri Madhopur | Sujangarh | Taranagar | Thanaghazi | Tibbi | Tijara | Todaraisingh | Tonk | Udaipur | Udaipurwati | Uniayara | Vallabhnagar | Viratnagar ";
			s_a[30]=" Barmiak | Be | Bhurtuk | Chhubakha | Chidam | Chubha | Chumikteng | Dentam | Dikchu | Dzongri | Gangtok | Gauzing | Gyalshing | Hema | Kerung | Lachen | Lachung | Lema | Lingtam | Lungthu | Mangan | Namchi | Namthang | Nanga | Nantang | Naya Bazar | Padamachen | Pakhyong | Pemayangtse | Phensang | Rangli | Rinchingpong | Sakyong | Samdong | Singtam | Siniolchu | Sombari | Soreng | Sosing | Tekhug | Temi | Tsetang | Tsomgo | Tumlong | Yangang | Yumtang ";
			s_a[31]=" Ambasamudram | Anamali | Arakandanallur | Arantangi | Aravakurichi | Ariyalur | Arkonam | Arni | Aruppukottai | Attur | Avanashi | Batlagundu | Bhavani | Chengalpattu | Chengam | Chennai | Chidambaram | Chingleput | Coimbatore | Courtallam | Cuddalore | Cumbum | Denkanikoitah | Devakottai | Dharampuram | Dharmapuri | Dindigul | Erode | Gingee | Gobichettipalayam | Gudalur | Gudiyatham | Harur | Hosur | Jayamkondan | Kallkurichi | Kanchipuram | Kangayam | Kanyakumari | Karaikal | Karaikudi | Karur | Keeranur | Kodaikanal | Kodumudi | Kotagiri | Kovilpatti | Krishnagiri | Kulithalai | Kumbakonam | Kuzhithurai | Madurai | Madurantgam | Manamadurai | Manaparai | Mannargudi | Mayiladuthurai | Mayiladutjurai | Mettupalayam | Metturdam | Mudukulathur | Mulanur | Musiri | Nagapattinam | Nagarcoil | Namakkal | Nanguneri | Natham | Neyveli | Nilgiris | Oddanchatram | Omalpur | Ootacamund | Ooty | Orathanad | Palacode | Palani | Palladum | Papanasam | Paramakudi | Pattukottai | Perambalur | Perundurai | Pollachi | Polur | Pondicherry | Ponnamaravathi | Ponneri | Pudukkottai | Rajapalayam | Ramanathapuram | Rameshwaram | Ranipet | Rasipuram | Salem | Sankagiri | Sankaran | Sathiyamangalam | Sivaganga | Sivakasi | Sriperumpudur | Srivaikundam | Tenkasi | Thanjavur | Theni | Thirumanglam | Thiruraipoondi | Thoothukudi | Thuraiyure | Tindivanam | Tiruchendur | Tiruchengode | Tiruchirappalli | Tirunelvelli | Tirupathur | Tirupur | Tiruttani | Tiruvallur | Tiruvannamalai | Tiruvarur | Tiruvellore | Tiruvettipuram | Trichy | Tuticorin | Udumalpet | Ulundurpet | Usiliampatti | Uthangarai | Valapady | Valliyoor | Vaniyambadi | Vedasandur | Vellore | Velur | Vilathikulam | Villupuram | Virudhachalam | Virudhunagar | Wandiwash | Yercaud ";
			s_a[32]=" Agartala | Ambasa | Bampurbari | Belonia | Dhalai | Dharam Nagar | Kailashahar | Kamal Krishnabari | Khopaiyapara | Khowai | Phuldungsei | Radha Kishore Pur | Tripura ";
			s_a[33]=" Achhnera | Agra | Akbarpur | Aliganj | Aligarh | Allahabad | Ambedkar Nagar | Amethi | Amiliya | Amroha | Anola | Atrauli | Auraiya | Azamgarh | Baberu | Badaun | Baghpat | Bagpat | Baheri | Bahraich | Ballia | Balrampur | Banda | Bansdeeh | Bansgaon | Bansi | Barabanki | Bareilly | Basti | Bhadohi | Bharthana | Bharwari | Bhogaon | Bhognipur | Bidhuna | Bijnore | Bikapur | Bilari | Bilgram | Bilhaur | Bindki | Bisalpur | Bisauli | Biswan | Budaun | Budhana | Bulandshahar | Bulandshahr | Capianganj | Chakia | Chandauli | Charkhari | Chhata | Chhibramau | Chirgaon | Chitrakoot | Chunur | Dadri | Dalmau | Dataganj | Debai | Deoband | Deoria | Derapur | Dhampur | Domariyaganj | Dudhi | Etah | Etawah | Faizabad | Farrukhabad | Fatehpur | Firozabad | Garauth | Garhmukteshwar | Gautam Buddha Nagar | Ghatampur | Ghaziabad | Ghazipur | Ghosi | Gonda | Gorakhpur | Gunnaur | Haidergarh | Hamirpur | Hapur | Hardoi | Harraiya | Hasanganj | Hasanpur | Hathras | Jalalabad | Jalaun | Jalesar | Jansath | Jarar | Jasrana | Jaunpur | Jhansi | Jyotiba Phule Nagar | Kadipur | Kaimganj | Kairana | Kaisarganj | Kalpi | Kannauj | Kanpur | Karchhana | Karhal | Karvi | Kasganj | Kaushambi | Kerakat | Khaga | Khair | Khalilabad | Kheri | Konch | Kumaon | Kunda | Kushinagar | Lalganj | Lalitpur | Lucknow | Machlishahar | Maharajganj | Mahoba | Mainpuri | Malihabad | Mariyahu | Math | Mathura | Mau | Maudaha | Maunathbhanjan | Mauranipur | Mawana | Meerut | Mehraun | Meja | Mirzapur | Misrikh | Modinagar | Mohamdabad | Mohamdi | Moradabad | Musafirkhana | Muzaffarnagar | Nagina | Najibabad | Nakur | Nanpara | Naraini | Naugarh | Nawabganj | Nighasan | Noida | Orai | Padrauna | Pahasu | Patti | Pharenda | Phoolpur | Phulpur | Pilibhit | Pitamberpur | Powayan | Pratapgarh | Puranpur | Purwa | Raibareli | Rampur | Ramsanehi Ghat | Rasara | Rath | Robertsganj | Sadabad | Safipur | Sagri | Saharanpur | Sahaswan | Sahjahanpur | Saidpur | Salempur | Salon | Sambhal | Sandila | Sant Kabir Nagar | Sant Ravidas Nagar | Sardhana | Shahabad | Shahganj | Shahjahanpur | Shikohabad | Shravasti | Siddharthnagar | Sidhauli | Sikandra Rao | Sikandrabad | Sitapur | Siyana | Sonbhadra | Soraon | Sultanpur | Tanda | Tarabganj | Tilhar | Unnao | Utraula | Varanasi | Zamania ";
			s_a[34]=" Almora | Bageshwar | Bhatwari | Chakrata | Chamoli | Champawat | Dehradun | Deoprayag | Dharchula | Dunda | Haldwani | Haridwar | Joshimath | Karan Prayag | Kashipur | Khatima | Kichha | Lansdown | Munsiari | Mussoorie | Nainital | Pantnagar | Partapnagar | Pauri Garhwal | Pithoragarh | Purola | Rajgarh | Ranikhet | Roorkee | Rudraprayag | Tehri Garhwal | Udham Singh Nagar | Ukhimath | Uttarkashi ";
			s_a[35]=" Adra | Alipurduar | Amlagora | Arambagh | Asansol | Balurghat | Bankura | Bardhaman | Basirhat | Berhampur | Bethuadahari | Birbhum | Birpara | Bishanpur | Bolpur | Bongoan | Bulbulchandi | Burdwan | Calcutta | Canning | Champadanga | Contai | Cooch Behar | Daimond Harbour | Dalkhola | Dantan | Darjeeling | Dhaniakhali | Dhuliyan | Dinajpur | Dinhata | Durgapur | Gangajalghati | Gangarampur | Ghatal | Guskara | Habra | Haldia | Harirampur | Harishchandrapur | Hooghly | Howrah | Islampur | Jagatballavpur | Jalpaiguri | Jhalda | Jhargram | Kakdwip | Kalchini | Kalimpong | Kalna | Kandi | Karimpur | Katwa | Kharagpur | Khatra | Krishnanagar | Mal Bazar | Malda | Manbazar | Mathabhanga | Medinipur | Mekhliganj | Mirzapur | Murshidabad | Nadia | Nagarakata | Nalhati | Nayagarh | Parganas | Purulia | Raiganj | Rampur Hat | Ranaghat | Seharabazar | Siliguri | Suri | Takipur | Tamluk";
			
			function print_state2(state_id,currentState){
				
				// given the id of the <select> tag as function argument, it inserts <option> tags
				var option_str = document.getElementById(state_id);
				option_str.length=0;
				option_str.options[0] = new Option('Select State','');
				option_str.selectedIndex = 0;
				for (var i=0; i<state_arr2.length; i++) {
					if(currentState == state_arr[i])
					{
						option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i],'defaultSelected','selected');
					}
					else
					{
						option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
					}
				}
			}
			
			function print_city2(city_id, city_index){
				var option_str = document.getElementById(city_id);
				option_str.length=0;	// Fixed by Julian Woods
				option_str.options[0] = new Option('Select City','');
				option_str.selectedIndex = 0;
				var city_arr = s_a[city_index].split("|");
				for (var i=0; i<city_arr.length; i++) {
					option_str.options[option_str.length] = new Option(city_arr[i],city_arr[i]);
				}
			}
			
			$('#updateForm2').on('submit', function(e) {
				e.preventDefault();
				var data = new FormData(this);
				var formAction = $(this);
				var btnAction = $('#updateBtn2');
				var spinAction = $('#updateSpin2');
				if ($(formAction).parsley().isValid() == true) {
					$.ajax({
						type: 'POST',
						url: $(formAction).attr('action'),
						data: data,
						cache: false,
						contentType: false,
						processData: false,
						beforeSend: function() {
							$(btnAction).attr("disabled", true);
							$(spinAction).show();
						},
						success: function(response) {
							console.log(response);
							var response = JSON.parse(response);
							$(btnAction).removeAttr("disabled");
							$(spinAction).hide();
							if (response[0].res == 'success') {
								$('.notifyjs-wrapper').remove();
								$.notify("" + response[0].msg + "", "success");
								if (response[0].redirect) {
									window.setTimeout(function() {
										window.location.href = response[0].redirect;
									}, 1000);
									} else {
									window.setTimeout(function() {
										window.location.reload();
									}, 1000);
								}
								} else if (response[0].res == 'error') {
								$('.notifyjs-wrapper').remove();
								$.notify("" + response[0].msg + "", "error");
							}
						},
						error: function() {
							window.location.reload();
						}
					});
				}
			});
		</script>
		<?php
			break;
		case "WriteReview"; ?>
		<?php if(!empty($pdata)){?> 
			
			<div class="create-review-top-container-fluid d-flex">
				<?php
					if($ptype=='Ind'){
						$icons = explode(',', $pdata->image1);
					}
					else{
						$icons = explode(',', $pdata->image);
					}
				?>
				<img src="<?= base_url('uploads/product/') . $icons[0]; ?>"  class="create-review-image mr-2">
				<div class="create-review-top-right-container-fluid">
					
					<p class="create-review-product-title"><?=$pdata->name;?></p>
					
					<div id="create-review-star-line-field-container-fluid">
						<div id="create-review-star-line-wrapper">
							<div class="create-review-star-line-container-fluid">  
								<div class="rating-box">  
									<div class="rating-container">
										<input type="radio" name="rating" value="5" id="star-5" required data-parsley-required-message="Please select a star rating."> <label for="star-5">&#9733;</label>
										
										<input type="radio" name="rating" value="4" id="star-4"> <label for="star-4">&#9733;</label>
										
										<input type="radio" name="rating" value="3" id="star-3"> <label for="star-3">&#9733;</label>
										
										<input type="radio" name="rating" value="2" id="star-2"> <label for="star-2">&#9733;</label>
										
										<input type="radio" name="rating" value="1" id="star-1"> <label for="star-1">&#9733;</label>
									</div>   
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 py-2 reviews-details">
					
					<!--<div class="form-group">
						<label>Size Purchased</label>
						<select class="form-control">
						<option value="XS">XS</option>
						<option value>S</option>
						<option value>M</option>
						<option value>L</option>
						<option value>XL</option>
						</select>
						</div>
						<div class="form-group">
						<label>Your Usual Size</label>
						<select class="form-control">
						<option value="XS">XS</option>
						<option value>S</option>
						<option value>M</option>
						<option value>L</option>
						<option value>XL</option>
						</select>
					</div>-->
					
					<label>How did it feet it?</label>
					<div class="form-group mb-0">
						
						<input type="radio" name="fit_status" id="true-to-size"  required data-parsley-required-message="Tell us how did it fit." class="sr-only" value="true-to-size">
						<label for="true-to-size"  class="review-fit-button">
							<span>True to size</span>
						</label>
						<input type="radio" name="fit_status" id="run-small" required class="sr-only" value="run-small">
						<label for="run-small" class="review-fit-button">
							<span>Run Small</span>
						</label>
						<input type="radio" name="fit_status" id="runs-large" required class="sr-only" value="runs-large">
						<label for="runs-large" class="review-fit-button">
							<span>Runs large</span>
						</label>
					</div>
					<div class="form-group mb-0 mt-1">
						<?php 
							if($this->permission == 'true'){ 
								$name=$this->userData->name?$this->userData->name:'';
								$email=$this->userData->email?$this->userData->email:'';
							}?>
							<label>Name</label>
							<input type="text" name="name" value="<?php if(!empty($name)){echo $name;}?>" required data-parsley-required-message="Please provide your name." placeholder="xyz" class="form-control">
					</div>
					<div class="form-group mb-0 mt-1">
						<label>Email</label>
						<input type="email" name="email" value="<?php if(!empty($email)){echo $email;}?>" required data-parsley-required-message="Please provide a valid email address." placeholder="slick@example.com" class="form-control">
					</div>
					<div class="form-group mb-0 mt-1">
						<label>Upload Your Product Image</label>
						<input type="file" name="image[]" multiple placeholder="" class="form-control">
						<input type="hidden" name="product_id" value="<?=$pdata->id ?>">
						<input type="hidden" name="product_type" value="<?=$ptype ?>"> 
					</div>
					<div class="form-group mb-0 mt-1">
						<label>Review Title</label>
						<input type="text" name="review_title" required data-parsley-required-message="Please give your review a title." placeholder="Give your review a title" class="form-control">
					</div>
					<div class="from-group mb-0 mt-1">
						<label>Body of Review(1500)</label>  
						<textarea class="form-control mb-0" name="review_message" required data-parsley-required-message="Please provide a short review of the product." rows="5" placeholder="Write your comments here"></textarea>
					</div>  
				</div>
			</div>
			<button id="addBtn" class="btn btn-secondary">SUBMIT REVIEW</button>    
			<script>
				$(".review-fit-button").click(function() {
					$(".review-fit-button").removeClass("activeFit");
					$(this).addClass("activeFit");
				});
				$('.addReview').on('submit', function(e) {     
					// alert(1);
					var formAction = $(this);
					var btnAction = $('#addBtn');
					var spinAction = $('#addSpin');
					e.preventDefault();
					var data = new FormData(this);
					if ($(formAction).parsley().isValid() == true) {
						$.ajax({
							type: 'POST',
							url: $(formAction).attr('action'),
							data: data,
							cache: false,
							contentType: false,
							processData: false,
							beforeSend: function() {
								$(btnAction).attr("disabled", true);
								$(btnAction).append('<i class="fa fa-spin fa-spinner" id="addSpin"></i>');
							},
							success: function(response) {
								console.log(response);
								var response = JSON.parse(response);
								$(btnAction).removeAttr("disabled");
								$(btnAction).children().remove(); 
								if (response[0].res == 'success') {
									
									$('.notifyjs-wrapper').remove();
									$.notify("" + response[0].msg + "", "success");
									if (response[0].redirect) {
										window.setTimeout(function() {
											window.location.href = response[0].redirect;
										}, 1000);
										} else {
										window.setTimeout(function() {
											window.location.reload();
										}, 1000);
									}
									} else if (response[0].res == 'error') {
									$('.notifyjs-wrapper').remove();
									$.notify("" + response[0].msg + "", "error");
									if (response[0].redirect) {
										window.setTimeout(function() {
											window.location.href = response[0].redirect;
										}, 1000);
									} 
								}
							},
							error: function() {
								// window.location.reload();
							}
						});
					}
				});
			</script>
		<?php } ?>
		<?php
			break;
			case "ShowReview"; 
			if(!empty($reviews)){
				
				foreach($reviews as $review){ 
				?>
				<div class="row mt-2 pb-3 border-bottom">
					<div class="col-sm-3">
						<div class="ratings-container">
							<div class="ratings">
								<div class="ratings-val" style="width:<?= ($review->rating)*20;?>%;"></div><!-- End .ratings-val -->
							</div><!-- End .ratings -->
						</div><!-- End .rating-container -->
						
						<span style="font-weight:600"><?= $review->name;?></span><br>
						<?php 
							$last_date = date_create(date('Y-m-d H:i:s')); 
							$today = date_create($review->created_at);  
							$date_difference = date_diff($last_date,$today);  
							$days=$date_difference->format('%a');
							
							if($days<=10 AND $days>0){
								$reviewDays=$days.'&nbsp; Days Ago'; 
								}else{
								$reviewDays= $review->created_at;     
							}   
						?>
						<small><?= $reviewDays;?></small>
					</div>
					<div class="col-sm-4 review-desc">  
						<span style="font-weight:600; text-transform:uppercase;"><?= $review->review_title;?></span><br>
						<!--<div class="py-2"><small>Size purchased:1x</small>&emsp;<small>Usual Size:1x</small>&emsp;<small>Color:chocklate</small></div>-->
						<p style="font-weight:500;font-size: 12px;" class="text-justify"><?=  $review->review_message;?></p>
					</div>
					<div class="col-sm-3">
						<div class="row">
							<div class="col-sm-12 owl-carousel user-review-img ">
								
								<?php 
									$img=explode(",",$review->review_img); 
									if(!empty($img)){
										foreach($img as $icon){
											if(!empty($icon)){
											?>
											<img src="<?= base_url('uploads/review/'.$icon) ?>" class="" alt=""  width="80" height="80" />
											<?php 
											}
										}
									}
								?>
							</div>
							
						</div>
					</div>
					<div class="col-sm-2 "> 
						<button class="product-review-helpful-button" style="margin:10px 0;" onclick="UpdateHelpfulReview(<?= $review->id;?>,this)"><svg fill="none" style="margin-right:5px;margin-top:5px;" width="12" height="12" viewBox="0 0 12 12">
							<path d="M2.625 10.8755C2.88859 10.8794 3.15051 10.9181 3.404 10.9905L5.221 11.5095C5.48881 11.586 5.76597 11.6249 6.0445 11.625H8.487C9.23072 11.625 9.94793 11.3488 10.4995 10.8499C11.051 10.351 11.3976 9.66499 11.472 8.925L11.622 6.375C11.6485 5.85448 11.4935 5.3409 11.1835 4.92197C10.8734 4.50303 10.4275 4.20473 9.922 4.078L9.1945 3.919C9.03191 3.87868 8.88749 3.7851 8.78428 3.65316C8.68106 3.52121 8.62499 3.35852 8.625 3.191V1.5C8.625 1.20163 8.50647 0.915483 8.2955 0.704505C8.08452 0.493526 7.79837 0.375 7.5 0.375C7.20163 0.375 6.91548 0.493526 6.7045 0.704505C6.49353 0.915483 6.375 1.20163 6.375 1.5V2.277C6.375 3.27156 5.97991 4.22539 5.27665 4.92865C4.57339 5.63191 3.61956 6.027 2.625 6.027V10.8755Z" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M0.375 4.875H2.625V11.625H0.375V4.875Z" stroke="#000000" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg><span class="product-review-helpful-button-text">Helpful (<span class="product-review-helpful-count"><?php if(!empty($review->help_count)){echo $review->help_count;}else{echo 0;}?></span>)</span></button>
					</div>
				</div>
				<script>
					$('.user-review-img').owlCarousel({
						loop: true,
						autoplay: true,
						nav: false,
						items: 3,
						margin: 5,
						dots: false,
						
					})
				</script>
				<?php  
				}
			?>
			<?php }  
			break;
			case "ViewCoupon"; 
			if(!empty($coupon)){
			?>
			<div class="modal-content">
				<div class="modal-header" style="border:none;">
					<div class="col-sm-3 p-0 pb-2">
						<img class="coupon-banner" src="<?= base_url('uploads/coupon/'.$coupon->banner); ?>" style=" width:90px !important;" />
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12 pb-2 border-bottom">
							<strong class="coupon-title font-weight-bold" ><?=$coupon->title ?></strong><br> 
							<span class="description" style="font-size:12px;"><?php echo $coupon->description; ?></span>
						</div>
						<div class="col-sm-12">
							<strong class="tab-content">Terms & Conditions</strong>
							<span class="termsconditions"><?php echo base64_decode($coupon->termsconditions ); ?></span>
						</div>
					</div>
				</div>
				<div class="modal-footer item1 d-flex">
					<div class="couponCodecontainer-fluid css-svqrpb">
						<div class="couponCode css-12c2ay0 text"><?=$coupon->coupon ?></div>    
					</div>  
					<button type="button" class="btn btn-default" data-dismiss="modal" style="border: 1px solid gainsboro; width:47%">Dismiss</button>
					<button type="button" class="btn btn-primary coupon-copy-btn1" data-copy-on-click="<?=$coupon->coupon ?>"   data-text="Copy Code" data-text-copied="COPIED"  style="background-color: #8340A1; width:47%">Copy Code</button> 
				</div> 
			</div>   
			<script>
				
				$('.coupon-copy-btn1').copiq({   
					parent: '.item1',
					content: '.text',
					onSuccess: function ($element, source, selection) {
						$('span', $element).text($element.attr("data-text-copied"));
						setTimeout(function () {
							$('span', $element).text($element.attr("data-text"));
						}, 2000);
					}
				});    
				
				
				$('.coupon-copy-btn1').copyOnClick({
					confirmTime: 2, 
					confirmClass: "copy-confirmation",  
					confirmText: "%c copied" 
				});  
			</script>
			?>
			<?php }  
			break; 
			case "ViewBeautyTips";  
			if(!empty($beautytips)){
			?>
			<div class="cartimgsection" style="background:url(<?= base_url('uploads/product/').$beautytips->image?>);background-size: cover;background-position: center;"> 
				<?php if(!empty($beautytips->point_name)){
					$pointname=explode(',',$beautytips->point_name);
					$pointcontent=explode(',',$beautytips->point_content);
					$xaxis=explode(',',$beautytips->xaxis);
					$yaxis=explode(',',$beautytips->yaxis);
					
					for($i=0;$i<count($pointname); $i++){
					?>
					<span class="fa fa-plus-circle fa-2x  cartitem1" data-toggle="popover-hover" title="<?= $pointname[$i]?>"
					data-content="<?= $pointcontent[$i] ?>" data-placement="top" style="top:<?= $yaxis[$i] ?>px;left:<?= $xaxis[$i] ?>px;"></span> 
					<?php	
					}
				} ?>
				<div class="col-12 col-md-6 d-none" id="chk"></div>
			</div>
			<script>
				$(function () {
					$('[data-toggle="tooltip"]').tooltip()
				})
				jQuery('[data-toggle="popover-hover"]').popover({
					trigger: 'hover',
				})	
			</script>
			<?php }  
			case "CouponTermsConditions";
			if(!empty($list)){
			?>
			<div class="row">
				<div class="col-sm-12">
					<center><p class="mb-1" style="color:grey; font-weight:500; color: #353434;"><?php if($status=='user_coupon'){echo $list->description1;}else{echo $list->description;}?></p></center>
					<p style="font-weight:400;">
						<?php if($status=='user_coupon'){echo base64_decode($list->termsconditions1);}else{ echo base64_decode($list->termsconditions);}?>
					</p>
				</div>
			</div>
			<?php } 
			break;
			case "AppliedCouponDetails";
			if(!empty($coupon)){ ?>
			<div class="row">
				<div class="col-sm-12">
					<p class="mb-1" style="color:grey; font-weight:500; color: #353434;">Test</p>
				</div>
			</div>
			<?php }
			break; 
			case "ShowGiftWrap";  
			if(!empty($list)){
				if($list->is_giftwrap=='true'){
					$cartGiftWrap=json_decode($list->giftwrap_details);
					$giftwrapid=$cartGiftWrap->giftwrapid;
					$giftwrap=$this->db->get_where('tbl_giftwrap')->result(); 
					
					#Fetch purchasing gift wrap details
					$receipientName=$cartGiftWrap->recipientName ;
					$senderName =$cartGiftWrap->senderName;  
				$message =$cartGiftWrap->message;
				?>
				<div class="row">
				<div class="col-sm-6">
				<div class="mb-2">
				<span class="text-uppercase">Gift Wrapping</span><br> 
				<span class="font-weight:bold"><h3 class="mb-0">Make It Special</h3></span>
				</div>
				<form action="<?= base_url($this->data->controller . '/' . $this->data->method . '/UpdateGiftWrap')?>" id="addForm2" method="POST" > 
				<div class="mb-4">
				<input type="hidden" id="cart-item-id" name="id">
				<div class="gift-wrap-slider owl-carousel m-0 overflow-hidden">
				<?php 
				if(!empty($giftwrap)){
				$count=0;
				foreach($giftwrap as $giftcard){
				?>
				<div class="mx-1 couponcontainer-fluid" >   
				<div class="row m-0" style="min-height:120px; min-width:120px; "> 
				<input type="radio" id="giftwrap<?=$count;?>" value="<?= $giftcard->id ?>" <?php if($giftwrapid==$giftcard->id){echo "checked='checked'";}?> class="sr-only" name="giftwrapid" required data-parsley-required-message="Please select your favourite gift wrapper or box"> 
				<label class="col-sm-12 p-0 gift-wrap-label <?php if($giftwrapid==$giftcard->id){echo 'active';}?>"  for="giftwrap<?=$count;?>"> 
				<img src="<?= base_url('uploads/giftcard/').$giftcard->image ?>" class="gift-wrap-image" style="height:100px; width:100%" />
				</label>
				<div class="col-sm-12 p-0  d-flex justify-content-between" style="color:black;" > 
				<span style="font-weight:500;"><?= $giftcard->name; ?></span>     
				<span class="coupon-copy-btn"  style="font-weight:500;cursor:pointer;">Rs-<?= $giftcard->price?></span>  
				</div>          
				</div>
				</div>
				<?php $count++; } } ?>
				</div>
				</div>
				<div class="form-group">
				<input type="text" name="recipientName" class="form-control form-control-lg" placeholder="Recipient Name" value="<?=$receipientName?>" required data-parsley-required-message="Please enter recipient name">     
				</div>
				<div class="form-group">
				<textarea class="form-control" name="message" placeholder="Message(200/200)"  rows="3" style="border-radius:3px;min-height:100px;" required data-parsley-required-message="Please write your message"><?= $message?></textarea>    
				</div>
				<div class="form-group">
				<input type="text" name="senderName" class="form-control form-control-lg" placeholder="Sender Name" value="<?=$senderName?>" required data-parsley-required-message="Please enter sender name">       
				</div>
				<div class="form-group">
				<button class="btn btn-sm btn-secondary btn-block" id="addBtn2" style="line-height:1"><i class="fa fa-check-circle"></i>Add Giftwrap&nbsp;<i class="fa fa-spin fa-spinner" id="addSpin2" style="display:none;"></i></button>	   
				</div>
				</form>
				</div>	
				<div class="col-sm-6 d-flex flex-column"> 
				<div class="mt-5">
				<h6 class="mt-3">HOW DOES IT WORKS?</h6> 
				<div class="row mt-2">
				<div class="col-3 ">
				<center><img src="https://constant.myntassets.com/checkout/assets/img/giftwrap-card.webp" class="img-fluid" style="height: 45px;"></center>
				</div>	
				<div class="col-9">
				<span class="font-weight-bold">Personalised card</span>  <br>
				<small>Your message will be printed on a card placed inside the package.</small>
				</div>	
				</div>
				<div class="row mt-2">
				<div class="col-3 ">
				<center><img src="https://constant.myntassets.com/checkout/assets/img/giftwrap-invoice.webp" class="img-fluid" style="height: 45px;"></center>
				</div>	
				<div class="col-9">
				<span class="font-weight-bold">Invoice will be included</span>  <br>
				<small>The receiver will get an invoice showing the amount you pay or the discount applied.</small>
				</div>	
				</div>
				<div class="row mt-2">
				<div class="col-3 ">
				<center><img src="https://constant.myntassets.com/checkout/assets/img/giftwrap-tag.webp" class="img-fluid" style="height: 45px;"></center>
				</div>	
				<div class="col-9">
				<span class="font-weight-bold">Original product tags will be retained</span>  <br>
				<small>Original product tags with MRP will be left intact in-case you’d like to exchange for a different size.</small>
				</div>	
				</div>
				<div class="row m-2">
				<label ><span class="text-danger font-weight-bold">Please Note: </span><span>Gift wrapping is not available for Pay on Delivery orders.</span><br><span>Gift wrapping price will be added in your product price.</span></label>
				</div>
				</div>
				</div>
				</div>
				<script>
				$('.gift-wrap-slider').owlCarousel({  
				loop: false, 
				autoplay: false,  
				nav: true,
				dots: false,
				margin: 0,
				responsive: {
				0: {
				items: 1,
				
				},
				460: {
				items: 1.5,
				},
				1024: {
				items: 2,
				},
				},
				navText: [
				'<i class="fa-solid fa-angle-left" style="width:23px; height:30px; display:flex; justify-content:center;align-items:center;font-size:16px; background: white; background: #ffffff !important; color: #6a6868;"></i>',
				'<i class="fa-solid fa-angle-right" style="width:23px; height:30px; display:flex; justify-content:center;align-items:center;font-size:16px; background: white; background: #ffffff !important; color: #6a6868;"></i>'
				],
				// navcontainer-fluid: '.main-content .custom-nav',
				})
				
				$(document).ready(function(){
				$('.gift-wrap-label').click(function(){
				$('.gift-wrap-label').removeClass('active');
				$(this).addClass('active');
				})
				})
				$('#addForm2').on('submit', function(e) {
				var formAction = $(this);
				var btnAction = $('#addBtn2');
				var spinAction = $('#addSpin2');
				e.preventDefault();
				var data = new FormData(this);
				if ($(formAction).parsley().isValid() == true) {
				$.ajax({
				type: 'POST',
				url: $(formAction).attr('action'),
				data: data,
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
				$(btnAction).attr("disabled", true);
				$(spinAction).show();
				},
				success: function(response) {
				console.log(response);
				var response = JSON.parse(response);
				$(btnAction).removeAttr("disabled");
				$(spinAction).hide();
				if (response[0].res == 'success') {
				$('.notifyjs-wrapper').remove();
				$.notify("" + response[0].msg + "", "success");
				if (response[0].redirect) {
				window.setTimeout(function() {
				window.location.href = response[0].redirect;
				}, 1000);
				} else {
				window.setTimeout(function() {
				window.location.reload();
				}, 1000);
				}
				} else if (response[0].res == 'error') {
				$('.notifyjs-wrapper').remove();
				$.notify("" + response[0].msg + "", "error");
				}
				},
				error: function() {
				window.location.reload();
				}
				});
				}
				});
				</script>
				<?php }  }
				break; 
				case "ShowSingleOrder";  
				if(!empty($list)){	
				$orderid=$list->orderid;
				$order_details=$this->db->get_where('tbl_order',['orderid'=>$orderid])->row();
				$tbl_track_product=$this->db->get_where('tbl_track_product',['cartid'=>$list->id])->row();
				
				$view_status='false';
				if($list->is_combo=='')
				{
				$product = $this->db->get_where('products',array('id'=>$list->product_id))->row();
				$variant = $this->db->get_where('product_variant',array('id'=>$list->variant_id))->row();
				$icons = explode(',',$variant->variant_img);
				$product_name=$product->title;
				$ret_ref_status=$product->refund_status;
				$cancel_status=$product->cancel_status;
				$ret_ref_expire_date=date('Y-m-d',strtotime("+".$product->refund_limit." days",strtotime($tbl_track_product->delivered_datetime)));
				$cancel_expire_date=date('Y-m-d',strtotime("+".$product->cancel_limit." days",strtotime($order['created_at'])));
				}
				else if($list->is_combo=='true')
				{
				$product = $this->db->get_where('tbl_combo',array('id'=>$list->combo_id))->row();
				$icons = explode(',',$product->image);
				$product_name=$product->name;
				$ret_ref_status=$product->ret_refund_status;
				$cancel_status=$product->cancel_status;
				$ret_ref_expire_date=date('Y-m-d',strtotime("+".$product->ret_ref_limit." days",strtotime($tbl_track_product->delivered_datetime)));
				$cancel_expire_date=date('Y-m-d',strtotime("+".$product->cancel_limit." days",strtotime($order['created_at'])));
				}	
				
				$current_date=date('Y-m-d');
				$count=1;
				if($status=='cancel' AND ($list->order_status!='cancel')){
				$view_status=$cancel_status;
				$match_date=$cancel_expire_date;
				}
				elseif($status=='return' AND ($list->order_status=='delivered')){
				$view_status=$ret_ref_status;
				$match_date=$ret_ref_expire_date;
				}
				
				if($view_status=='true')
				{	
				if($current_date<=$match_date)
				{ 
				?>
				<div class="row py-2">
				<div class="col-sm-12 p-0">
				<div class="row m-0 pb-2 divider-border" >
				<div class="col-3 pr-0">
				<img src="<?= base_url('uploads/product/').$icons[0]; ?>" class="img-fluid border" style="height: 100px; width:85px;">
				</div>
				<div class="col-9 p-0">
				<label for="selectdata" style="font-size: 14px;"><?= $product_name?></label><br>
				<span class="mb-1">
				<?php if($list->is_combo==''){?>
				<?php 
				$color_details=$this->db->get_where('tbl_color',['code'=>$list->color])->row();
				?>
				<small style="font-size: 14px; font-weight:500;"><?=ucfirst($color_details->name)?></small>
				<?php if($list->size!='NA'){?>
				| Size:<small style="font-size: 14px;"><?=$list->size?></small>
				<?php } ?>
				<?php }else{ 
				$pid=explode(",",$list->product_id);
				$psize=explode(",",$list->size);
				$colors=explode(",",$list->color);
				for($i=0;$i<count($pid);$i++){  
				$color_details=$this->db->get_where('tbl_color',['code'=>$colors[$i]])->row();
				$combo_items=$this->db->get_where('products',array('id'=>$pid[$i]))->row();   
				$size=$psize[$i]!='NA'?('/'.$psize[$i]):'';
				echo $combo_items->name."-"."&nbsp;<small style='font-size: 16px;'>".ucfirst($color_details->name)."</small><small style='font-size:16px;'>".$size."</small></br>";   
				}
				}
				?>  
				</span>|
				<span class="mb-1">
				<span class="p-1" >Qty:<?=$list->qty?></span>
				<input type="hidden" name="id[]" value="<?=$list->id?>" >	
				</span>
				</div>
				</div>	
				</div>
				<div class="col-sm-12 p-0">
				<div class="form-group my-2">
				<?php if($status=='cancel'){?>
				<div class="form-group mt-2 px-3 pb-3 divider-border">
				<label class="mb-0"  style="font-size: 14px; font-weight:600;">Reason for cancellation <span>*</span></label>	
				<select class="form-control" name="reason[]" required  onchange="alertTOUser(this.value)"  >
				<option selected disabled>Select Reason</option>  
				<option value="Delayed delivery – Product won’t reach on time">Delayed delivery – Product won’t reach on time</option>  
				<option value="Found cheaper somewhere else">Found cheaper somewhere else</option>  
				<option value="Want to change the style/color">Want to change the style/color</option>    
				<option value="Want to change the size">Want to change the size</option>    
				<option value="Wrong address/phone">Wrong address/phone</option>    
				<option value="Want to change tha payment method">Want to change tha payment method</option>    
				<option value="Duplicate order">Duplicate order</option>    
				<option value="Want to add more order">Want to add more order</option>    
				<option value="Other">Other</option>    
				</select>
				</div>
				<?php }else{ ?>
				<div class="form-group mt-2 px-3 pb-3 divider-border">
				<label class="mb-0"  style="font-size: 14px; font-weight:600;">Reason for Return <span>*</span></label>	
				<select class="form-control" name="reason[]" required style="appearance:auto;" >  
				<option selected disabled>Select Reason</option>  
				<option value="Received diffrent color/style">Received diffrent color/style</option>  
				<option value="Quality of product not as expected">Quality of product not as expected</option>  
				<option value="The product received is defective">The product received is defective</option>    
				<option value="Received a broken/damaged ite">Received a broken/damaged item</option>    
				<option value="Product is missing in the package">Product is missing in the package</option>    
				<option value="Don't want the product anymore">Don't want the product anymore</option>    
				<option value="Received wrong itme">Received wrong itme</option>    
				<option value="Item didn't turn on on arrival/installation">Item didn't turn on on arrival/installation</option>    
				<option value="Don't like the size/fit of the product">Don't like the size/fit of the product</option>    
				<option value="Other">Other</option>    
				</select>
				</div>
				<div class="form-group  mb-1 px-3 pb-3 divider-border">
				<label class="mb-0"  style="font-size: 14px; font-weight:600;">What do you want in return?</label><br>
				<label for="exchnage" style="font-size: 14px;"><input type="radio" name="return_type" value="exchange" id="exchnage" onclick="returnType(this.value)">&nbsp;Exchange</label>
				<label for="refund" class="ml-2" style="font-size: 14px;"><input type="radio" name="return_type" value="refund" id="refund" onclick="returnType(this.value)">&nbsp;Refund</label>
				</div>
				<?php if($order_details->pay_mode=='cod'){?>
				<div class="form-group mt-2 px-3 refund_account_details" style="display:none;">
				<label class="mb-0"  style="font-size: 14px; font-weight:600;">Refund amount transfer in</label><br>
				<div style="display:flex; align-items:baseline;" class="mb-2">
				<input type="radio" onclick="show_account_details('wallet')" class="mr-1" name="transfer_type" value="wallet" id="wallet">
				<label for="wallet" style="font-size: 14px; color:black;" class="mb-0">Slick pattern wallet<br><span style="font-size: 12px; color:#4d4b4bdb;">Refund will be transferred to your slick pattern wallet within 5-7 days after product pick up is completed </span></label>
				</div><hr>
				<div style="display:flex; align-items:baseline;">
				<input type="radio" onclick="show_account_details('account')" class="mr-1 show_account_details" name="transfer_type" value="account" id="account">
				<label for="account" style="font-size: 14px; color:black;" class="mb-0 show_account_details">Bank Account<br>
				<span style="font-size: 12px; color:#4d4b4bdb;">Refund will be transferred to your bank account within 5-7 days after product pick up is completed </span><br>
				<p class="mb-0 account-details-container font-weight-normal" style="display:none;">
				<?php 
				$userid=$this->userData->id;
				$accounts=$this->db->get_where('tbl_user_account',['userid'=>$userid,'is_status'=>'true'])->result();
				if(!empty($accounts)){
				function mask_number($number, $count = 4, $seperators = '-')
				{
				$masked = preg_replace('/\d/', 'x', $number);
				$last = preg_match(sprintf('/([%s]?\d){%d}$/', preg_quote($seperators),  $count), $number, $matches);
				if ($last) {
				list($clean) = $matches;
				$masked = substr($masked, 0, -strlen($clean)) . $clean;
				}
				return $masked;
				}
				?>
				<select class="form-control" name="account_details" id="account_details" data-parsley-required-message="Please select bank account" style="appearance:auto;" >  
				<option selected disabled>Select existing account</option>  
				<?php foreach($accounts as $each){	?>
				<option value="<?=$each->id?>"><?=mask_number($each->account_number)?>--<?=$each->account_holder_name?></option>    
				<?php } ?>
				</select>
				<?php } ?>
				<a href="javascript:void(0)" onclick="AccountModal()" style="color:#8834AD;">+Add New Account</a>
				</p>
				</label>
				</div>
				</div>
				<?php } }?>
				</div>
				</div>
				</div>
				<script>
				function show_account_details(e){
				if(e!=''){
				if(e=='account'){
				$('.account-details-container').show();
				$('#account_details').attr('required',true);
				}
				else{
				$('.account-details-container').hide();
				$('#account_details').removeAttr('required',true);
				}
				}
				}
				function returnType(e){
				if(e!=''){
				if(e=='refund'){
				$('.refund_account_details').show();
				}
				else{
				$('.refund_account_details').hide();
				}
				}
				}
				</script>
				<?php 
				}
				} 
				}
				break; 
				case "ShowAllOrder";  
				if(!empty($list)){ 
				$orderid=$list->orderid;
				$cartOrder=$this->db->get_where('tbl_cart',array('orderid'=>$orderid,'is_status'=>'true'))->result();
				if(!empty($cartOrder)){	
				$count=1;
				$view_status='false';
				foreach($cartOrder as $cart){
				
				if($cart->is_combo=='')
				{
				$product = $this->db->get_where('products',array('id'=>$cart->product_id))->row();
				$variant = $this->db->get_where('product_variant',array('id'=>$cart->variant_id))->row();
				$icons = explode(',',$variant->variant_img);
				$product_name=$product->title;
				$ret_ref_status=$product->refund_status;
				$cancel_status=$product->cancel_status;
				$ret_ref_expire_date=date('Y-m-d',strtotime("+".$product->refund_limit." days",strtotime($list->created_at)));
				$cancel_expire_date=date('Y-m-d',strtotime("+".$product->cancel_limit." days",strtotime($list->created_at)));
				}
				elseif($cart->is_combo=='true')
				{
				$product = $this->db->get_where('tbl_combo',array('id'=>$cart->combo_id))->row();
				$icons = explode(',',$product->image);
				$product_name=$product->name;
				$ret_ref_status=$product->ret_refund_status;
				$cancel_status=$product->cancel_status;
				$ret_ref_expire_date=date('Y-m-d',strtotime("+".$product->ret_ref_limit." days",strtotime($list->created_at)));
				$cancel_expire_date=date('Y-m-d',strtotime("+".$product->cancel_limit." days",strtotime($list->created_at)));
				}	
				$current_date=date('Y-m-d'); 
				if($status=='cancel' AND ($cart->order_status!='cancel')){
				$view_status=$cancel_status;
				$match_date=$cancel_expire_date;
				}
				elseif(($status=='return') AND ($cart->order_status=='delivered')){
				$view_status=$ret_ref_status;
				$match_date=$ret_ref_expire_date;
				}
				
				if($view_status=='true')
				{
				if($current_date<=$match_date)
				{ 
				?>
				<div class="row py-2 <?php if($count<count($cartOrder)){echo 'border-bottom';}?>">
				<div class="col-sm-12">
				<div class="row" >
				<div class="col-3 pr-0">
				<img src="<?= base_url('uploads/product/').$icons[0]; ?>" class="img-fluid border" style="height: 100px; width:85px;">
				</div>
				<div class="col-7 p-0">
				<label for="selectdata" style="font-size: 14px;"><?= $product_name?></label><br>
				<span class="mb-1">
				<?php if($cart->is_combo==''){?>
				<?php 
				$color_details=$this->db->get_where('tbl_color',['code'=>$cart->color])->row();
				?>
				<small style="font-size: 14px; font-weight:500;"><?=ucfirst($color_details->name)?></small>
				<?php if($cart->size!='NA'){?>
				| Size:<small style="font-size: 14px;"><?=$cart->size?></small>
				<?php } ?>
				<?php }else{ 
				$pid=explode(",",$cart->product_id);
				$psize=explode(",",$cart->size);
				$colors=explode(",",$cart->color);
				for($i=0;$i<count($pid);$i++){  
				$color_details=$this->db->get_where('tbl_color',['code'=>$colors[$i]])->row();
				$combo_items=$this->db->get_where('products',array('id'=>$pid[$i]))->row();   
				$size=$psize[$i]!='NA'?('/'.$psize[$i]):'';
				echo $combo_items->name."-"."&nbsp;<small style='font-size: 16px;'>".ucfirst($color_details->name)."</small><small style='font-size:16px;'>".$size."</small></br>";   
				}
				}
				?>  
				</span>|
				<span class="mb-1">
				<span class="p-1" >Qty:<?=$cart->qty?></span>
				</span>
				</div>
				<div class="col-2">
				<input type="checkbox" name="id[]"  value="<?=$cart->id?>" id="selectdata" onchange="GetDetails('<?php echo 'hide_item_details-'.$count; ?>')" >	
				</div>
				</div>	
				</div>
				<div class="col-sm-12 mt-2" id="hide_item_details-<?= $count; ?>" style="display:none;">
				<div class="form-group my-2">
				<?php if($status=='cancel'){?>
				<div class="form-group mt-2">
				<label class="mb-0"  style="font-size: 14px;">Reason for cancellation <span>*</span></label>	
				<select class="form-control" name="reason[]" required  onchange="alertTOUser(this.value)"  >
				<option selected disabled>Select Reason</option>  
				<option value="Delayed delivery – Product won’t reach on time">Delayed delivery – Product won’t reach on time</option>  
				<option value="Found cheaper somewhere else">Found cheaper somewhere else</option>  
				<option value="Want to change the style/color">Want to change the style/color</option>    
				<option value="Want to change the size">Want to change the size</option>    
				<option value="Wrong address/phone">Wrong address/phone</option>    
				<option value="Want to change tha payment method">Want to change tha payment method</option>    
				<option value="Duplicate order">Duplicate order</option>    
				<option value="Want to add more order">Want to add more order</option>    
				<option value="Other">Other</option>    
				</select>
				</div>
				<?php }else{ ?>
				<div class="form-group mt-2">
				<label class="mb-0"  style="font-size: 14px;">Reason for Return <span>*</span></label>	
				<select class="form-control" name="reason[]" required  onchange="alertTOUser(this.value)"  >
				<option selected disabled>Select Reason</option>  
				<option value="Received diffrent color/style">Received diffrent color/style</option>  
				<option value="Quality of product not as expected">Quality of product not as expected</option>  
				<option value="The product received is defective">The product received is defective</option>    
				<option value="Received a broken/damaged ite">Received a broken/damaged item</option>    
				<option value="Product is missing in the package">Product is missing in the package</option>    
				<option value="Don't want the product anymore">Don't want the product anymore</option>    
				<option value="Received wrong itme">Received wrong itme</option>    
				<option value="Item didn't turn on on arrival/installation">Item didn't turn on on arrival/installation</option>    
				<option value="Don't like the size/fit of the product">Don't like the size/fit of the product</option>    
				<option value="Other">Other</option>    
				</select>
				</div>
				<?php } ?>
				</div>
				</div>
				</div>
				<?php $count++; 
				} 
				} 
				}
				} 
				} 
				break;
				}
				}
				else
				{
				echo 'Action is required.';
				}
				?>
								