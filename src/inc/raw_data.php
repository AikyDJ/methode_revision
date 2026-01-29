<?php

$type = array(
    ["id" => 1, "type" => "checkbox"],
    ["id" => 2, "type" => "text"],
    ["id" => 3, "type" => "radio"]
);


$chapter1_questions = array(

    [
        "id" => 1,
        "text" => "How many layers are there in the OSI model?",
        "type" => 3,
        "options" => ["5", "6", "7", "8"],
        "correct_answers" => ["7"]
    ],
    [
        "id" => 2,
        "text" => "Which OSI layer is responsible for data encryption?",
        "type" => 3,
        "options" => ["Presentation", "Session", "Transport", "Application"],
        "correct_answers" => ["Presentation"]
    ],
    [
        "id" => 3,
        "text" => "Which OSI layer controls dialog and session management?",
        "type" => 3,
        "options" => ["Session", "Transport", "Network", "Data Link"],
        "correct_answers" => ["Session"]
    ],
    [
        "id" => 4,
        "text" => "Which OSI layer handles routing?",
        "type" => 3,
        "options" => ["Network", "Transport", "Physical", "Application"],
        "correct_answers" => ["Network"]
    ],
    [
        "id" => 5,
        "text" => "Which OSI layer uses MAC addresses?",
        "type" => 3,
        "options" => ["Network", "Data Link", "Transport", "Session"],
        "correct_answers" => ["Data Link"]
    ],
    [
        "id" => 6,
        "text" => "Which OSI layer transmits raw bits over a medium?",
        "type" => 3,
        "options" => ["Physical", "Data Link", "Network", "Transport"],
        "correct_answers" => ["Physical"]
    ],
    [
        "id" => 7,
        "text" => "Which OSI layer ensures reliable data delivery?",
        "type" => 3,
        "options" => ["Transport", "Network", "Session", "Application"],
        "correct_answers" => ["Transport"]
    ],
    [
        "id" => 8,
        "text" => "Which OSI layer interacts directly with the user?",
        "type" => 3,
        "options" => ["Application", "Presentation", "Session", "Transport"],
        "correct_answers" => ["Application"]
    ],
    [
        "id" => 9,
        "text" => "How many layers are in the TCP/IP model?",
        "type" => 3,
        "options" => ["3", "4", "5", "7"],
        "correct_answers" => ["4"]
    ],
    [
        "id" => 10,
        "text" => "Which TCP/IP layer corresponds to OSI Transport layer?",
        "type" => 3,
        "options" => ["Transport", "Internet", "Application", "Network Access"],
        "correct_answers" => ["Transport"]
    ],
    [
        "id" => 11,
        "text" => "Which TCP/IP layer handles IP addressing?",
        "type" => 3,
        "options" => ["Application", "Transport", "Internet", "Network Access"],
        "correct_answers" => ["Internet"]
    ],
    [
        "id" => 12,
        "text" => "Which protocol is connection-oriented?",
        "type" => 3,
        "options" => ["UDP", "IP", "TCP", "ICMP"],
        "correct_answers" => ["TCP"]
    ],
    [
        "id" => 13,
        "text" => "Which protocol is connectionless?",
        "type" => 3,
        "options" => ["TCP", "UDP", "FTP", "SMTP"],
        "correct_answers" => ["UDP"]
    ],
    [
        "id" => 14,
        "text" => "Which protocol belongs to the Internet layer?",
        "type" => 3,
        "options" => ["IP", "TCP", "HTTP", "FTP"],
        "correct_answers" => ["IP"]
    ],
    [
        "id" => 15,
        "text" => "Which OSI layer provides error detection?",
        "type" => 3,
        "options" => ["Data Link", "Physical", "Session", "Application"],
        "correct_answers" => ["Data Link"]
    ],
    [
        "id" => 16,
        "text" => "Which OSI layer performs segmentation?",
        "type" => 3,
        "options" => ["Transport", "Network", "Session", "Presentation"],
        "correct_answers" => ["Transport"]
    ],
    [
        "id" => 17,
        "text" => "Which OSI layer reassembles packets?",
        "type" => 3,
        "options" => ["Transport", "Network", "Application", "Physical"],
        "correct_answers" => ["Transport"]
    ],
    [
        "id" => 18,
        "text" => "Which protocol is used for error reporting?",
        "type" => 3,
        "options" => ["ICMP", "ARP", "DNS", "DHCP"],
        "correct_answers" => ["ICMP"]
    ],
    [
        "id" => 19,
        "text" => "Which OSI layer handles flow control?",
        "type" => 3,
        "options" => ["Transport", "Network", "Data Link", "Session"],
        "correct_answers" => ["Transport"]
    ],
    [
        "id" => 20,
        "text" => "Which TCP/IP layer corresponds to OSI Application, Presentation, and Session layers?",
        "type" => 3,
        "options" => ["Application", "Transport", "Internet", "Network Access"],
        "correct_answers" => ["Application"]
    ]

);
$chapter2_questions = array(

    [
        "id" => 21,
        "text" => "Which IP version uses 32-bit addressing?",
        "type" => 3,
        "options" => ["IPv4", "IPv6", "ARP", "ICMP"],
        "correct_answers" => ["IPv4"]
    ],
    [
        "id" => 22,
        "text" => "Which IP version uses hexadecimal notation?",
        "type" => 3,
        "options" => ["IPv4", "IPv6", "TCP", "UDP"],
        "correct_answers" => ["IPv6"]
    ],
    [
        "id" => 23,
        "text" => "What is the default subnet mask for a Class C network?",
        "type" => 2,
        "correct_answers" => ["255.255.255.0"]
    ],
    [
        "id" => 24,
        "text" => "Which device operates at the Network layer?",
        "type" => 3,
        "options" => ["Hub", "Switch", "Router", "Repeater"],
        "correct_answers" => ["Router"]
    ],
    [
        "id" => 25,
        "text" => "Which device forwards frames using MAC addresses?",
        "type" => 3,
        "options" => ["Router", "Switch", "Gateway", "Modem"],
        "correct_answers" => ["Switch"]
    ],
    [
        "id" => 26,
        "text" => "Which device broadcasts data to all ports?",
        "type" => 3,
        "options" => ["Switch", "Router", "Hub", "Firewall"],
        "correct_answers" => ["Hub"]
    ],
    [
        "id" => 27,
        "text" => "Which protocol maps IP addresses to MAC addresses?",
        "type" => 3,
        "options" => ["ARP", "DNS", "ICMP", "DHCP"],
        "correct_answers" => ["ARP"]
    ],
    [
        "id" => 28,
        "text" => "Which protocol assigns IP addresses automatically?",
        "type" => 3,
        "options" => ["DHCP", "DNS", "FTP", "SMTP"],
        "correct_answers" => ["DHCP"]
    ],
    [
        "id" => 29,
        "text" => "Which protocol is used to send emails?",
        "type" => 3,
        "options" => ["SMTP", "FTP", "HTTP", "POP3"],
        "correct_answers" => ["SMTP"]
    ],
    [
        "id" => 30,
        "text" => "Which protocol is used to receive emails?",
        "type" => 3,
        "options" => ["SMTP", "POP3", "HTTP", "FTP"],
        "correct_answers" => ["POP3"]
    ],
    [
        "id" => 31,
        "text" => "Which protocol resolves domain names to IP addresses?",
        "type" => 3,
        "options" => ["DNS", "ARP", "ICMP", "FTP"],
        "correct_answers" => ["DNS"]
    ],
    [
        "id" => 32,
        "text" => "Which protocol is used for file transfer?",
        "type" => 3,
        "options" => ["FTP", "SMTP", "SNMP", "TELNET"],
        "correct_answers" => ["FTP"]
    ],
    [
        "id" => 33,
        "text" => "Which protocol provides secure remote login?",
        "type" => 3,
        "options" => ["TELNET", "FTP", "SSH", "HTTP"],
        "correct_answers" => ["SSH"]
    ],
    [
        "id" => 34,
        "text" => "What is the default port for HTTP?",
        "type" => 2,
        "correct_answers" => ["80"]
    ],
    [
        "id" => 35,
        "text" => "What is the default port for HTTPS?",
        "type" => 2,
        "correct_answers" => ["443"]
    ],
    [
        "id" => 36,
        "text" => "Which protocol is used for secure web traffic?",
        "type" => 3,
        "options" => ["HTTP", "HTTPS", "FTP", "TELNET"],
        "correct_answers" => ["HTTPS"]
    ],
    [
        "id" => 37,
        "text" => "Which protocol is used for network management?",
        "type" => 3,
        "options" => ["SNMP", "SMTP", "FTP", "DNS"],
        "correct_answers" => ["SNMP"]
    ],
    [
        "id" => 38,
        "text" => "Which address is used to identify a device uniquely on a local network?",
        "type" => 3,
        "options" => ["IP address", "MAC address", "Port number", "Subnet mask"],
        "correct_answers" => ["MAC address"]
    ],
    [
        "id" => 39,
        "text" => "Which IP address is used for loopback testing?",
        "type" => 2,
        "correct_answers" => ["127.0.0.1"]
    ],
    [
        "id" => 40,
        "text" => "Which protocols operate at the Application layer?",
        "type" => 1,
        "options" => ["HTTP", "FTP", "TCP", "DNS"],
        "correct_answers" => ["HTTP", "FTP", "DNS"]
    ]

);
$chapter3_questions = array(

    [
        "id" => 41,
        "text" => "What is subnetting used for?",
        "type" => 3,
        "options" => [
            "Increasing network speed",
            "Dividing a network into smaller networks",
            "Encrypting data",
            "Assigning MAC addresses"
        ],
        "correct_answers" => ["Dividing a network into smaller networks"]
    ],
    [
        "id" => 42,
        "text" => "What does CIDR stand for?",
        "type" => 2,
        "correct_answers" => ["Classless Inter-Domain Routing"]
    ],
    [
        "id" => 43,
        "text" => "Which classful IP range belongs to Class A?",
        "type" => 3,
        "options" => [
            "1.0.0.0 – 126.0.0.0",
            "128.0.0.0 – 191.255.255.255",
            "192.0.0.0 – 223.255.255.255",
            "224.0.0.0 – 239.255.255.255"
        ],
        "correct_answers" => ["1.0.0.0 – 126.0.0.0"]
    ],
    [
        "id" => 44,
        "text" => "Which subnet mask corresponds to /24?",
        "type" => 2,
        "correct_answers" => ["255.255.255.0"]
    ],
    [
        "id" => 45,
        "text" => "How many usable hosts are available in a /24 network?",
        "type" => 2,
        "correct_answers" => ["254"]
    ],
    [
        "id" => 46,
        "text" => "Which address identifies the network itself?",
        "type" => 3,
        "options" => [
            "First IP address",
            "Last IP address",
            "Network address",
            "Broadcast address"
        ],
        "correct_answers" => ["Network address"]
    ],
    [
        "id" => 47,
        "text" => "Which address is used to send data to all hosts in a subnet?",
        "type" => 3,
        "options" => [
            "Network address",
            "Loopback address",
            "Broadcast address",
            "Gateway address"
        ],
        "correct_answers" => ["Broadcast address"]
    ],
    [
        "id" => 48,
        "text" => "What is the binary value of subnet mask 255.255.255.0?",
        "type" => 2,
        "correct_answers" => ["11111111.11111111.11111111.00000000"]
    ],
    [
        "id" => 49,
        "text" => "Which IP address is private?",
        "type" => 3,
        "options" => [
            "8.8.8.8",
            "192.168.1.1",
            "172.217.0.1",
            "1.1.1.1"
        ],
        "correct_answers" => ["192.168.1.1"]
    ],
    [
        "id" => 50,
        "text" => "Which IP range is reserved for private Class A networks?",
        "type" => 2,
        "correct_answers" => ["10.0.0.0 – 10.255.255.255"]
    ],
    [
        "id" => 51,
        "text" => "What does VLSM allow?",
        "type" => 3,
        "options" => [
            "Fixed subnet sizes",
            "Variable subnet sizes",
            "MAC filtering",
            "IP encryption"
        ],
        "correct_answers" => ["Variable subnet sizes"]
    ],
    [
        "id" => 52,
        "text" => "What is the loopback IP address?",
        "type" => 2,
        "correct_answers" => ["127.0.0.1"]
    ],
    [
        "id" => 53,
        "text" => "Which CIDR notation provides the largest number of hosts?",
        "type" => 3,
        "options" => ["/16", "/24", "/30", "/28"],
        "correct_answers" => ["/16"]
    ],
    [
        "id" => 54,
        "text" => "How many usable hosts are available in a /30 network?",
        "type" => 2,
        "correct_answers" => ["2"]
    ],
    [
        "id" => 55,
        "text" => "Which address is typically assigned to the router?",
        "type" => 3,
        "options" => [
            "Network address",
            "Broadcast address",
            "Default gateway",
            "Loopback address"
        ],
        "correct_answers" => ["Default gateway"]
    ],
    [
        "id" => 56,
        "text" => "Which subnet mask allows exactly 14 usable hosts?",
        "type" => 3,
        "options" => [
            "255.255.255.240",
            "255.255.255.248",
            "255.255.255.252",
            "255.255.255.224"
        ],
        "correct_answers" => ["255.255.255.240"]
    ],
    [
        "id" => 57,
        "text" => "What does NAT stand for?",
        "type" => 2,
        "correct_answers" => ["Network Address Translation"]
    ],
    [
        "id" => 58,
        "text" => "What is the main purpose of NAT?",
        "type" => 3,
        "options" => [
            "Encrypt traffic",
            "Translate private IPs to public IPs",
            "Assign MAC addresses",
            "Improve bandwidth"
        ],
        "correct_answers" => ["Translate private IPs to public IPs"]
    ],
    [
        "id" => 59,
        "text" => "Which IP address cannot be assigned to a host?",
        "type" => 3,
        "options" => [
            "Network address",
            "Private address",
            "Public address",
            "Gateway address"
        ],
        "correct_answers" => ["Network address"]
    ],
    [
        "id" => 60,
        "text" => "Which addresses are not routable on the Internet?",
        "type" => 1,
        "options" => [
            "Private IP addresses",
            "Public IP addresses",
            "Loopback addresses",
            "Multicast addresses"
        ],
        "correct_answers" => [
            "Private IP addresses",
            "Loopback addresses"
        ]
    ]

);
$chapter4_questions = array(

    [
        "id" => 61,
        "text" => "What is the primary purpose of a firewall?",
        "type" => 3,
        "options" => [
            "Speed up the network",
            "Filter network traffic",
            "Assign IP addresses",
            "Encrypt files"
        ],
        "correct_answers" => ["Filter network traffic"]
    ],
    [
        "id" => 62,
        "text" => "Which firewall type filters traffic based on state?",
        "type" => 3,
        "options" => [
            "Packet filtering firewall",
            "Stateful firewall",
            "Proxy firewall",
            "Hardware firewall"
        ],
        "correct_answers" => ["Stateful firewall"]
    ],
    [
        "id" => 63,
        "text" => "What does VPN stand for?",
        "type" => 2,
        "correct_answers" => ["Virtual Private Network"]
    ],
    [
        "id" => 64,
        "text" => "What is the main advantage of a VPN?",
        "type" => 3,
        "options" => [
            "Faster Internet",
            "Secure remote access",
            "Free IP addresses",
            "Disable firewalls"
        ],
        "correct_answers" => ["Secure remote access"]
    ],
    [
        "id" => 65,
        "text" => "Which protocol is commonly used by VPNs?",
        "type" => 3,
        "options" => [
            "IPsec",
            "HTTP",
            "FTP",
            "SMTP"
        ],
        "correct_answers" => ["IPsec"]
    ],
    [
        "id" => 66,
        "text" => "Which attack floods a network with traffic?",
        "type" => 3,
        "options" => [
            "Phishing",
            "Man-in-the-middle",
            "DoS",
            "Spoofing"
        ],
        "correct_answers" => ["DoS"]
    ],
    [
        "id" => 67,
        "text" => "Which attack intercepts communication between two parties?",
        "type" => 3,
        "options" => [
            "DoS",
            "MITM",
            "Phishing",
            "Brute force"
        ],
        "correct_answers" => ["MITM"]
    ],
    [
        "id" => 68,
        "text" => "Which attack attempts to guess passwords repeatedly?",
        "type" => 3,
        "options" => [
            "Brute force",
            "Spoofing",
            "Sniffing",
            "Injection"
        ],
        "correct_answers" => ["Brute force"]
    ],
    [
        "id" => 69,
        "text" => "What is phishing?",
        "type" => 3,
        "options" => [
            "Intercepting packets",
            "Tricking users into revealing information",
            "Blocking network access",
            "Scanning ports"
        ],
        "correct_answers" => ["Tricking users into revealing information"]
    ],
    [
        "id" => 70,
        "text" => "Which protocol provides secure file transfer?",
        "type" => 3,
        "options" => [
            "FTP",
            "SFTP",
            "TFTP",
            "HTTP"
        ],
        "correct_answers" => ["SFTP"]
    ],
    [
        "id" => 71,
        "text" => "Which protocol secures web traffic?",
        "type" => 3,
        "options" => [
            "HTTP",
            "HTTPS",
            "FTP",
            "TELNET"
        ],
        "correct_answers" => ["HTTPS"]
    ],
    [
        "id" => 72,
        "text" => "Which service resolves domain names?",
        "type" => 3,
        "options" => [
            "DHCP",
            "DNS",
            "SNMP",
            "NTP"
        ],
        "correct_answers" => ["DNS"]
    ],
    [
        "id" => 73,
        "text" => "Which service synchronizes time on a network?",
        "type" => 3,
        "options" => [
            "NTP",
            "SNMP",
            "DNS",
            "FTP"
        ],
        "correct_answers" => ["NTP"]
    ],
    [
        "id" => 74,
        "text" => "Which protocol is used to manage network devices?",
        "type" => 3,
        "options" => [
            "SNMP",
            "SMTP",
            "FTP",
            "HTTP"
        ],
        "correct_answers" => ["SNMP"]
    ],
    [
        "id" => 75,
        "text" => "What is port scanning used for?",
        "type" => 3,
        "options" => [
            "Detect open services",
            "Encrypt traffic",
            "Assign IPs",
            "Block attacks"
        ],
        "correct_answers" => ["Detect open services"]
    ],
    [
        "id" => 76,
        "text" => "Which tool is commonly used for port scanning?",
        "type" => 3,
        "options" => [
            "Wireshark",
            "Nmap",
            "Metasploit",
            "OpenSSL"
        ],
        "correct_answers" => ["Nmap"]
    ],
    [
        "id" => 77,
        "text" => "What does IDS stand for?",
        "type" => 2,
        "correct_answers" => ["Intrusion Detection System"]
    ],
    [
        "id" => 78,
        "text" => "What is the function of an IDS?",
        "type" => 3,
        "options" => [
            "Prevent attacks",
            "Detect suspicious activity",
            "Encrypt traffic",
            "Assign IP addresses"
        ],
        "correct_answers" => ["Detect suspicious activity"]
    ],
    [
        "id" => 79,
        "text" => "Which component actively blocks attacks?",
        "type" => 3,
        "options" => [
            "IDS",
            "IPS",
            "Firewall",
            "Router"
        ],
        "correct_answers" => ["IPS"]
    ],
    [
        "id" => 80,
        "text" => "Which of the following improve network security?",
        "type" => 1,
        "options" => [
            "Strong passwords",
            "Firewalls",
            "Regular updates",
            "Open ports"
        ],
        "correct_answers" => [
            "Strong passwords",
            "Firewalls",
            "Regular updates"
        ]
    ]

);


$question2 = array(
    // ===================== CHAPITRE 1 =====================
    [
        "id" => 101,
        "text" => "Qu'est-ce qu'un réseau informatique ?",
        "type" => 3,
        "options" => [
            "Un groupe d'ordinateurs connectés à Internet",
            "Un ensemble de périphériques reliés pour échanger des informations",
            "Un système d'exploitation réseau",
            "Un logiciel de partage de fichiers"
        ],
        "correct_answers" => ["Un ensemble de périphériques reliés pour échanger des informations"]
    ],
    [
        "id" => 102,
        "text" => "Quels sont les avantages des réseaux informatiques ? (plusieurs réponses)",
        "type" => 1,
        "options" => [
            "Partage de fichiers",
            "Partage d'imprimantes",
            "Jeux en solo",
            "Communication par email",
            "Augmentation de la vitesse du processeur"
        ],
        "correct_answers" => ["Partage de fichiers", "Partage d'imprimantes", "Communication par email"]
    ],
    [
        "id" => 103,
        "text" => "Quelle est la différence entre un réseau homogène et hétérogène ?",
        "type" => 3,
        "options" => [
            "Un réseau homogène utilise uniquement des câbles Ethernet",
            "Un réseau hétérogène mélange des équipements de différents constructeurs",
            "Un réseau homogène est plus rapide",
            "Un réseau hétérogène n'a pas de serveur"
        ],
        "correct_answers" => ["Un réseau hétérogène mélange des équipements de différents constructeurs"]
    ],
    [
        "id" => 104,
        "text" => "Qu'est-ce qu'une adresse MAC ?",
        "type" => 3,
        "options" => [
            "Une adresse logique attribuée par le FAI",
            "Un identifiant unique matériel attribué par le fabricant",
            "Une adresse IP privée",
            "Un protocole de routage"
        ],
        "correct_answers" => ["Un identifiant unique matériel attribué par le fabricant"]
    ],
    [
        "id" => 105,
        "text" => "Quelle est la plus petite unité d'information envoyée sur un réseau ?",
        "type" => 3,
        "options" => ["Trame", "Paquet", "Bit", "Octet"],
        "correct_answers" => ["Paquet"]
    ],
    [
        "id" => 106,
        "text" => "Quel est le rôle d'un serveur dans un réseau ?",
        "type" => 2,
        "correct_answers" => ["Partager des ressources (fichiers, imprimantes, applications)"]
    ],
    [
        "id" => 107,
        "text" => "Quelle est la différence entre Internet et un réseau local (LAN) ?",
        "type" => 3,
        "options" => [
            "Internet est un réseau mondial, le LAN est local",
            "Le LAN utilise TCP/IP, Internet non",
            "Internet est plus lent",
            "Le LAN n'a pas de serveur"
        ],
        "correct_answers" => ["Internet est un réseau mondial, le LAN est local"]
    ],
    [
        "id" => 108,
        "text" => "Quels sont les types de réseaux basés sur l'étendue géographique ? (plusieurs réponses)",
        "type" => 1,
        "options" => ["PAN", "LAN", "WAN", "MAN", "VLAN"],
        "correct_answers" => ["PAN", "LAN", "WAN", "MAN"]
    ],
    [
        "id" => 109,
        "text" => "Qu'est-ce qu'un nœud dans un réseau ?",
        "type" => 3,
        "options" => [
            "Un routeur uniquement",
            "Toute entité adressable sur le réseau (PC, imprimante, serveur)",
            "Un câble de connexion",
            "Un logiciel réseau"
        ],
        "correct_answers" => ["Toute entité adressable sur le réseau (PC, imprimante, serveur)"]
    ],
    [
        "id" => 110,
        "text" => "Quelle est la fonction principale d'un protocole réseau ?",
        "type" => 2,
        "correct_answers" => ["Définir des règles pour la communication entre équipements"]
    ],

    // ===================== CHAPITRE 2 =====================
    [
        "id" => 201,
        "text" => "Quelle topologie utilise un câble unique avec des bouchons de terminaison ?",
        "type" => 3,
        "options" => ["Étoile", "Anneau", "Bus", "Maille"],
        "correct_answers" => ["Bus"]
    ],
    [
        "id" => 202,
        "text" => "Quel est l'inconvénient principal de la topologie en bus ?",
        "type" => 3,
        "options" => [
            "Coût élevé",
            "Difficile à étendre",
            "Une coupure du câble paralyse tout le réseau",
            "Nécessite un serveur central"
        ],
        "correct_answers" => ["Une coupure du câble paralyse tout le réseau"]
    ],
    [
        "id" => 203,
        "text" => "Dans une topologie en étoile, que se passe-t-il si le concentrateur tombe en panne ?",
        "type" => 3,
        "options" => [
            "Le réseau continue",
            "Seul l'ordinateur connecté au hub est affecté",
            "Tout le réseau est hors service",
            "Seuls les switches sont affectés"
        ],
        "correct_answers" => ["Tout le réseau est hors service"]
    ],
    [
        "id" => 204,
        "text" => "Quelle topologie est aussi appelée 'topologie hiérarchique' ?",
        "type" => 3,
        "options" => ["Bus", "Anneau", "Arbre", "Maille"],
        "correct_answers" => ["Arbre"]
    ],
    [
        "id" => 205,
        "text" => "Quelle topologie garantit une meilleure stabilité en cas de panne d'un nœud ?",
        "type" => 3,
        "options" => ["Bus", "Étoile", "Maille", "Anneau"],
        "correct_answers" => ["Maille"]
    ],
    [
        "id" => 206,
        "text" => "Quelle topologie utilise un jeton (token) pour l'accès au média ?",
        "type" => 3,
        "options" => ["Bus", "Étoile", "Anneau", "Arbre"],
        "correct_answers" => ["Anneau"]
    ],
    [
        "id" => 207,
        "text" => "Quels sont les avantages d'un réseau poste à poste ? (plusieurs réponses)",
        "type" => 1,
        "options" => [
            "Coût réduit",
            "Administration centralisée",
            "Facile à mettre en place",
            "Sécurité élevée",
            "Pas de serveur dédié"
        ],
        "correct_answers" => ["Coût réduit", "Facile à mettre en place", "Pas de serveur dédié"]
    ],
    [
        "id" => 208,
        "text" => "Quel est l'avantage principal d'un réseau client/serveur ?",
        "type" => 3,
        "options" => [
            "Coût faible",
            "Sécurité centralisée",
            "Aucun administrateur nécessaire",
            "Tous les postes sont égaux"
        ],
        "correct_answers" => ["Sécurité centralisée"]
    ],
    [
        "id" => 209,
        "text" => "Quelle topologie combine plusieurs topologies différentes ?",
        "type" => 3,
        "options" => ["Hybride", "Arbre", "Maille", "Anneau"],
        "correct_answers" => ["Hybride"]
    ],
    [
        "id" => 210,
        "text" => "Dans un réseau en anneau, que font les ordinateurs pour régénérer le signal ?",
        "type" => 2,
        "correct_answers" => ["Ils jouent le rôle de répéteurs"]
    ],

    // ===================== CHAPITRE 3 =====================
    [
        "id" => 301,
        "text" => "Quel équipement fonctionne au niveau de la couche liaison de données ?",
        "type" => 3,
        "options" => ["Routeur", "Hub", "Switch", "Modem"],
        "correct_answers" => ["Switch"]
    ],
    [
        "id" => 302,
        "text" => "Quel est le rôle d'un répéteur ?",
        "type" => 3,
        "options" => [
            "Filtrer les trames",
            "Régénérer et amplifier le signal",
            "Router les paquets",
            "Traduire les protocoles"
        ],
        "correct_answers" => ["Régénérer et amplifier le signal"]
    ],
    [
        "id" => 303,
        "text" => "Quel mode de transmission permet l'envoi et la réception simultanés ?",
        "type" => 3,
        "options" => ["Simplex", "Half-duplex", "Full-duplex", "Monodirectionnel"],
        "correct_answers" => ["Full-duplex"]
    ],
    [
        "id" => 304,
        "text" => "Quelle commande permet de voir l'adresse MAC d'une carte réseau sous Windows ?",
        "type" => 3,
        "options" => ["ping", "ipconfig /all", "tracert", "netstat"],
        "correct_answers" => ["ipconfig /all"]
    ],
    [
        "id" => 305,
        "text" => "Quel équipement permet de relier deux réseaux de types différents ?",
        "type" => 3,
        "options" => ["Hub", "Switch", "Routeur", "Passerelle"],
        "correct_answers" => ["Passerelle"]
    ],
    [
        "id" => 306,
        "text" => "Quelle est la fonction d'un transceiver ?",
        "type" => 2,
        "correct_answers" => ["Convertir les données parallèles en série et inversement"]
    ],
    [
        "id" => 307,
        "text" => "Quel équipement diffuse les trames à tous les ports (sauf le port source) ?",
        "type" => 3,
        "options" => ["Switch", "Routeur", "Hub", "Pont"],
        "correct_answers" => ["Hub"]
    ],
    [
        "id" => 308,
        "text" => "Quel équipement utilise une table de routage pour acheminer les paquets ?",
        "type" => 3,
        "options" => ["Switch", "Hub", "Routeur", "Répéteur"],
        "correct_answers" => ["Routeur"]
    ],
    [
        "id" => 309,
        "text" => "Quel est le rôle d'un pont (bridge) ?",
        "type" => 3,
        "options" => [
            "Relier deux réseaux locaux similaires et filtrer le trafic",
            "Amplifier le signal",
            "Convertir les signaux analogiques en numériques",
            "Router les paquets entre réseaux différents"
        ],
        "correct_answers" => ["Relier deux réseaux locaux similaires et filtrer le trafic"]
    ],
    [
        "id" => 310,
        "text" => "Quel équipement combine modem, routeur et switch ?",
        "type" => 3,
        "options" => ["Passerelle", "Pont", "Répéteur", "Carte réseau"],
        "correct_answers" => ["Passerelle"]
    ],

    // ===================== CHAPITRE 4 =====================
    [
        "id" => 401,
        "text" => "Quel type de câble utilise des paires torsadées et un connecteur RJ45 ?",
        "type" => 3,
        "options" => ["Coaxial", "Fibre optique", "Paire torsadée", "Liaison laser"],
        "correct_answers" => ["Paire torsadée"]
    ],
    [
        "id" => 402,
        "text" => "Quel est l'avantage principal de la fibre optique ?",
        "type" => 3,
        "options" => [
            "Coût faible",
            "Immunité aux interférences électromagnétiques",
            "Facile à installer",
            "Portée limitée"
        ],
        "correct_answers" => ["Immunité aux interférences électromagnétiques"]
    ],
    [
        "id" => 403,
        "text" => "Quelle est la distance maximale recommandée pour un câble UTP ?",
        "type" => 3,
        "options" => ["50 m", "100 m", "185 m", "500 m"],
        "correct_answers" => ["100 m"]
    ],
    [
        "id" => 404,
        "text" => "Quel type de câble coaxial est utilisé en 10Base2 ?",
        "type" => 3,
        "options" => ["Thicknet", "Thinnet", "UTP", "STP"],
        "correct_answers" => ["Thinnet"]
    ],
    [
        "id" => 405,
        "text" => "Quelle catégorie de câble UTP supporte 100 Mbps ?",
        "type" => 3,
        "options" => ["Cat 3", "Cat 4", "Cat 5", "Cat 6"],
        "correct_answers" => ["Cat 5"]
    ],
    [
        "id" => 406,
        "text" => "Quel support de transmission utilise la lumière infrarouge ?",
        "type" => 3,
        "options" => ["Fibre optique", "Laser", "Ondes radio", "Infrarouge"],
        "correct_answers" => ["Infrarouge"]
    ],
    [
        "id" => 407,
        "text" => "Quel est l'inconvénient des liaisons laser ?",
        "type" => 3,
        "options" => [
            "Coût élevé",
            "Sensibilité aux conditions atmosphériques",
            "Portée très limitée",
            "Interférences électromagnétiques"
        ],
        "correct_answers" => ["Sensibilité aux conditions atmosphériques"]
    ],
    [
        "id" => 408,
        "text" => "Quel type de câble a une âme centrale en cuivre entourée d'un blindage ?",
        "type" => 3,
        "options" => ["Paire torsadée", "Fibre optique", "Coaxial", "USB"],
        "correct_answers" => ["Coaxial"]
    ],
    [
        "id" => 409,
        "text" => "Quelle est la différence entre UTP et STP ?",
        "type" => 2,
        "correct_answers" => ["STP a un blindage métallique pour réduire les interférences"]
    ],
    [
        "id" => 410,
        "text" => "Quel support de transmission est utilisé pour les réseaux sans fil (WiFi) ?",
        "type" => 3,
        "options" => ["Fibre optique", "Ondes radio", "Laser", "Infrarouge"],
        "correct_answers" => ["Ondes radio"]
    ],

    // ===================== CHAPITRE 5 =====================
    [
        "id" => 501,
        "text" => "Combien de couches comporte le modèle OSI ?",
        "type" => 3,
        "options" => ["4", "5", "7", "8"],
        "correct_answers" => ["7"]
    ],
    [
        "id" => 502,
        "text" => "Quelle couche OSI gère l'adressage logique et le routage ?",
        "type" => 3,
        "options" => ["Physique", "Liaison", "Réseau", "Transport"],
        "correct_answers" => ["Réseau"]
    ],
    [
        "id" => 503,
        "text" => "Quelle couche OSI est responsable de la compression et du chiffrement des données ?",
        "type" => 3,
        "options" => ["Session", "Présentation", "Application", "Transport"],
        "correct_answers" => ["Présentation"]
    ],
    [
        "id" => 504,
        "text" => "Quelle couche OSI établit, gère et termine les sessions ?",
        "type" => 3,
        "options" => ["Session", "Transport", "Présentation", "Application"],
        "correct_answers" => ["Session"]
    ],
    [
        "id" => 505,
        "text" => "Quel PDU (Protocol Data Unit) est utilisé à la couche liaison de données ?",
        "type" => 3,
        "options" => ["Bit", "Trame", "Paquet", "Segment"],
        "correct_answers" => ["Trame"]
    ],
    [
        "id" => 506,
        "text" => "Quelle couche OSI convertit les bits en signaux électriques/optiques ?",
        "type" => 3,
        "options" => ["Liaison", "Physique", "Réseau", "Transport"],
        "correct_answers" => ["Physique"]
    ],
    [
        "id" => 507,
        "text" => "Quel est le rôle de la couche transport dans le modèle OSI ?",
        "type" => 2,
        "correct_answers" => ["Assurer la fiabilité de bout en bout, contrôle de flux, segmentation"]
    ],
    [
        "id" => 508,
        "text" => "Quelle couche OSI correspond à la couche application TCP/IP ?",
        "type" => 3,
        "options" => ["Application seule", "Application + Présentation + Session", "Transport", "Réseau"],
        "correct_answers" => ["Application + Présentation + Session"]
    ],
    [
        "id" => 509,
        "text" => "Quel est le processus d'ajout d'en-têtes à chaque couche appelé ?",
        "type" => 3,
        "options" => ["Encapsulation", "Désencapsulation", "Compression", "Chiffrement"],
        "correct_answers" => ["Encapsulation"]
    ],
    [
        "id" => 510,
        "text" => "Quel protocole fonctionne à la couche réseau ?",
        "type" => 3,
        "options" => ["TCP", "UDP", "IP", "HTTP"],
        "correct_answers" => ["IP"]
    ],

    // ===================== CHAPITRE 6 =====================
    [
        "id" => 601,
        "text" => "Combien de couches comporte le modèle TCP/IP ?",
        "type" => 3,
        "options" => ["4", "5", "6", "7"],
        "correct_answers" => ["4"]
    ],
    [
        "id" => 602,
        "text" => "Quelle couche TCP/IP correspond à la couche transport OSI ?",
        "type" => 3,
        "options" => ["Accès réseau", "Internet", "Transport", "Application"],
        "correct_answers" => ["Transport"]
    ],
    [
        "id" => 603,
        "text" => "Quel protocole est orienté connexion et fiable ?",
        "type" => 3,
        "options" => ["UDP", "TCP", "IP", "ICMP"],
        "correct_answers" => ["TCP"]
    ],
    [
        "id" => 604,
        "text" => "Quel protocole résout l'adresse IP en adresse MAC ?",
        "type" => 3,
        "options" => ["RARP", "ARP", "ICMP", "IGMP"],
        "correct_answers" => ["ARP"]
    ],
    [
        "id" => 605,
        "text" => "Quelle est la plage d'adresses IP privées de classe B ?",
        "type" => 3,
        "options" => [
            "10.0.0.0 – 10.255.255.255",
            "172.16.0.0 – 172.31.255.255",
            "192.168.0.0 – 192.168.255.255",
            "169.254.0.0 – 169.254.255.255"
        ],
        "correct_answers" => ["172.16.0.0 – 172.31.255.255"]
    ],
    [
        "id" => 606,
        "text" => "Quel protocole utilise le port 80 par défaut ?",
        "type" => 3,
        "options" => ["FTP", "HTTP", "SMTP", "DNS"],
        "correct_answers" => ["HTTP"]
    ],
    [
        "id" => 607,
        "text" => "Quelle est la taille d'une adresse IPv4 ?",
        "type" => 3,
        "options" => ["32 bits", "48 bits", "64 bits", "128 bits"],
        "correct_answers" => ["32 bits"]
    ],
    [
        "id" => 608,
        "text" => "Quel est le rôle du protocole ICMP ?",
        "type" => 2,
        "correct_answers" => ["Envoyer des messages d'erreur et de contrôle"]
    ],
    [
        "id" => 609,
        "text" => "Quel protocole utilise UDP pour le transfert de fichiers ?",
        "type" => 3,
        "options" => ["FTP", "TFTP", "HTTP", "SMTP"],
        "correct_answers" => ["TFTP"]
    ],
    [
        "id" => 610,
        "text" => "Quelle commande permet de tester la connectivité avec ICMP ?",
        "type" => 3,
        "options" => ["tracert", "ipconfig", "ping", "netstat"],
        "correct_answers" => ["ping"]
    ]
);


$question = array_merge(
    $chapter1_questions,
    $chapter2_questions,
    $chapter3_questions,
    $chapter4_questions,
    $question2
);
json_encode($question);