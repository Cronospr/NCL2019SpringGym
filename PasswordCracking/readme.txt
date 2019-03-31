craking1Easy
	./hashcat -m 0 -a 0 craking1Easy.txt rockyou.txt

	09a9ab7af9aa6847689ba8f510f0145e:vilovesas       
	ec5f0b1826389df8622133014e88afde:ryjd1982        
	2233287f476ba63323e60addca1f6b64:kirkles         
	6eb88c4c3c21577770d1d84b6963e3aa:justintlp       
	9997e70d60bbe73611613580d5dae3e6:gaselifl        

	Session..........: hashcat
	Status...........: Cracked
	Hash.Name........: MD5
	Hash.Target......: craking1Easy.txt
	Time.Started.....: Fri Mar 29 11:56:08 2019 (5 secs)
	Time.Estimated...: Fri Mar 29 11:56:13 2019 (0 secs)
	Guess.Base.......: File (rockyou.txt)
	Guess.Queue......: 1/1 (100.00%)
	Speed.#2.........:  1821.2 kH/s (8.97ms) @ Accel:128 Loops:1 Thr:8 Vec:1
	Recovered........: 5/5 (100.00%) Digests, 1/1 (100.00%) Salts
	Progress.........: 7987200/14344384 (55.68%)
	Rejected.........: 0/7987200 (0.00%)
	Restore.Point....: 7946240/14344384 (55.40%)
	Restore.Sub.#2...: Salt:0 Amplifier:0-1 Iteration:0-1
	Candidates.#2....: gat1985 -> g3ni3n3

	Started: Fri Mar 29 11:56:07 2019
	Stopped: Fri Mar 29 11:56:13 2019
-------
craking2hard
	./hashcat -m 0 -a 3 craking2Hard.txt FLAG-HQNT-?d?d?d?d

	684c21b5c1bf11ae827fc2ee8d14e415:FLAG-HQNT-0493  
	78d5e0b728ee142f5f6130e3cc735bc0:FLAG-HQNT-8193  
	2359e8e6e26e182b30697f95377107ea:FLAG-HQNT-9102  
	5b730827c2c6c22c0438a2b5dc453c9c:FLAG-HQNT-1796  
	f2d8af3d803694b951372921a821cc85:FLAG-HQNT-0283  
                                                 
	Session..........: hashcat
	Status...........: Cracked
	Hash.Name........: MD5
	Hash.Target......: craking2Hard.txt
	Time.Started.....: Fri Mar 29 12:58:12 2019 (0 secs)
	Time.Estimated...: Fri Mar 29 12:58:12 2019 (0 secs)
	Guess.Mask.......: FLAG-HQNT-?d?d?d?d [14]
	Guess.Queue......: 1/1 (100.00%)
	Speed.#2.........:  3141.7 kH/s (0.24ms) @ Accel:1024 Loops:1 Thr:8 Vec:1
	Recovered........: 5/5 (100.00%) Digests, 1/1 (100.00%) Salts
	Progress.........: 10000/10000 (100.00%)
	Rejected.........: 0/10000 (0.00%)
	Restore.Point....: 0/10000 (0.00%)
	Restore.Sub.#2...: Salt:0 Amplifier:0-1 Iteration:0-1
	Candidates.#2....: FLAG-HQNT-1234 -> FLAG-HQNT-7373

	Started: Fri Mar 29 12:58:04 2019
	Stopped: Fri Mar 29 12:58:13 2019
-------
cracking3Medium
	./hashcat -m 0 -a 0 craking3Medium.txt pokemon.txt
	
	c46950087eaa407782ad2619204476cd:dratini         
	d2e6fd7482922ec66e680e3a45fae3c6:klink           
	a603029f84b70a75fe1033efd072a76e:pansage         
	99447e1520183d7bf290918c90623e09:raticate        
	20238a1174c5204f444e20c342a6a326:remoraid        

	Session..........: hashcat
	Status...........: Cracked
	Hash.Name........: MD5
	Hash.Target......: craking3Medium.txt
	Time.Started.....: Fri Mar 29 13:36:33 2019 (0 secs)
	Time.Estimated...: Fri Mar 29 13:36:33 2019 (0 secs)
	Guess.Base.......: File (pokemon.txt)
	Guess.Queue......: 1/1 (100.00%)
	Speed.#2.........:   527.0 kH/s (0.19ms) @ Accel:128 Loops:1 Thr:8 Vec:1
	Recovered........: 5/5 (100.00%) Digests, 1/1 (100.00%) Salts
	Progress.........: 809/809 (100.00%)
	Rejected.........: 0/809 (0.00%)
	Restore.Point....: 0/809 (0.00%)
	Restore.Sub.#2...: Salt:0 Amplifier:0-1 Iteration:0-1
	Candidates.#2....: abomasnow -> zygarde

	Started: Fri Mar 29 13:36:33 2019
	Stopped: Fri Mar 29 13:36:34 2019
-------
craking4Medium
	./hashcat -m 1000 -a 0 craking4Medium2.txt rockyou.txt
	
	(only 5 of them were cracked, havn't try with ophcrack yet!)
	
	f3cf3773cd9142bcd130d84106c0af74:monkey5         
	46839a2b6fc6cfd4f46d875e3f86b8af:shad0w          
	13b29964cc2480b4ef454c59562e675c:P@ssword        
	53c53ba11d51525a952d2af68f996942:fairyprincess   
	6ec7798aae5b1e551c03f354a979bbb4:racecar1234     
	Approaching final keyspace - workload adjusted.  

	Session..........: hashcat
	Status...........: Exhausted
	Hash.Name........: NTLM
	Hash.Target......: craking4Medium2.txt
	Time.Started.....: Fri Mar 29 13:48:33 2019 (7 secs)
	Time.Estimated...: Fri Mar 29 13:48:40 2019 (0 secs)
	Guess.Base.......: File (rockyou.txt)
	Guess.Queue......: 1/1 (100.00%)
	Speed.#2.........:  1962.6 kH/s (7.25ms) @ Accel:128 Loops:1 Thr:8 Vec:1
	Recovered........: 5/10 (50.00%) Digests, 0/1 (0.00%) Salts
	Progress.........: 14344384/14344384 (100.00%)
	Rejected.........: 0/14344384 (0.00%)
	Restore.Point....: 14344384/14344384 (100.00%)
	Restore.Sub.#2...: Salt:0 Amplifier:0-1 Iteration:0-1
	Candidates.#2....: $HEX[2321676f7468] -> $HEX[042a0337c2a156616d6f732103]

	Started: Fri Mar 29 13:48:24 2019
	Stopped: Fri Mar 29 13:48:41 2019
	
	-------
	From ophcrack, all 10 passwords found
	
	0;;;5725A28AC80350B8AAD3B435B51404EE;F3CF3773CD9142BCD130D84106C0AF74;MONKEY5;;
	monkey5;1;151;7;lowalphanum;XP special/Bruteforce

	1;;;11CB3F697332AE4C4A3B108F3FA6CB6D;13B29964CC2480B4EF454C59562E675C;P@SSWOR;D;
	P@ssword;1;174;8;mixedalpha+special;XP special/Bruteforce

	2;;;C2A6A3BBA226DC79AAD3B435B51404EE;46839A2B6FC6CFD4F46D875E3F86B8AF;SHAD0W;;
	shad0w;1;146;6;lowalphanum;XP special/Bruteforce

	3;;;98F74F71875BB15CB757BF5C0D87772F;6EC7798AAE5B1E551C03F354A979BBB4;RACECAR;1234;
	racecar1234;1;242;11;lowalphanum;XP special/Bruteforce

	4;;;FE70541805EF3BD282A5E4BBC00225B3;53C53BA11D51525A952D2AF68F996942;FAIRYPR;INCESS;
	fairyprincess;1;339;13;lowalpha;XP special/XP special

	5;;;1E80D1B102B23C08AAD3B435B51404EE;B7CABD6AA9ED1312C4246C442DB84B81; LLS"DX;;
	 llS"Dx;1;239;7;mixedalpha+special;XP special/Bruteforce

	6;;;EF1A26352905DE95AAD3B435B51404EE;7764CC04BA33AED0BA86D73A4C70B272;I0$6B 9;;
	i0$6B 9;1;142;7;mixedalphanum+special;XP special/Bruteforce

	7;;;244E29990CF6AC82AAD3B435B51404EE;B64EED6E55DD8B3F95C6DC800B55F9C5;QIKK8YZ;;
	qiKk8yz;1;242;7;mixedalphanum;XP special/Bruteforce

	8;;;D22B4945A1EF7291AAD3B435B51404EE;F338168B17B1D2135608965A346EC4F8;%KA9Z`U;;
	%ka9Z`U;1;145;7;mixedalphanum+special;XP special/Bruteforce

	9;;;3613F7EC15407F56AAD3B435B51404EE;C82E164316183AA3AF3EA6BAA642A237;^B7E3D;;
	;^B7e3D;;1;175;7;mixedalphanum+special;XP special/Bruteforce
-------
craking5Hard
	./hashcat -m 0 -a 0 craking5Hard.txt lawNOrderX100.txt

	8609c7cc715dea6500e08db180b16f51:conned94        
	825b7ee403b1470b8b86ddb31e44ff0e:sugar11         
	315d1cc9faafa74129769751fdd92ea3:rockabye45      
	6475c851b56004eb96ab1404252c3a34:hooked37        
	3dd9dd0e352df4433aadf2273e269287:resilience05    

	Session..........: hashcat
	Status...........: Cracked
	Hash.Name........: MD5
	Hash.Target......: craking5Hard.txt
	Time.Started.....: Fri Mar 29 15:08:51 2019 (0 secs)
	Time.Estimated...: Fri Mar 29 15:08:51 2019 (0 secs)
	Guess.Base.......: File (lawNOrderX100.txt)
	Guess.Queue......: 1/1 (100.00%)
	Speed.#2.........:  3450.4 kH/s (8.40ms) @ Accel:128 Loops:1 Thr:8 Vec:1
	Recovered........: 5/5 (100.00%) Digests, 1/1 (100.00%) Salts
	Progress.........: 40960/45600 (89.82%)
	Rejected.........: 0/40960 (0.00%)
	Restore.Point....: 0/45600 (0.00%)
	Restore.Sub.#2...: Salt:0 Amplifier:0-1 Iteration:0-1
	Candidates.#2....: diss[363]99 -> rooftop40

	Started: Fri Mar 29 15:08:51 2019
	Stopped: Fri Mar 29 15:08:52 2019