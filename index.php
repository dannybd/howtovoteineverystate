<?php

$hash = isset($_GET['hash']) ? $_GET['hash'] : '';

function get_redirect_url($hash) {
  switch (strtolower($hash)) {
    case 'alabama':
    case 'al':
      return 'https://www.youtube.com/watch?v=ragLSjBiGIc';

    case 'alaska':
    case 'ak':
      return 'https://www.youtube.com/watch?v=RZd7Rp4m8gs';

    case 'arizona':
    case 'az':
      return 'https://www.youtube.com/watch?v=_1fKol8tBV8';

    case 'arkansas':
    case 'ar':
      return 'https://www.youtube.com/watch?v=gfCrwRUQJ3Q';

    case 'california':
    case 'ca':
      return 'https://www.youtube.com/watch?v=uTF5o-Ma1Yg';

    case 'colorado':
    case 'co':
      return 'https://www.youtube.com/watch?v=-YbN3aXcz98';

    case 'connecticut':
    case 'ct':
      return 'https://www.youtube.com/watch?v=Yj3UgguB9Nc';

    case 'delaware':
    case 'de':
      return 'https://www.youtube.com/watch?v=s8wwn3LA9uk';

    case 'florida':
    case 'fl':
      return 'https://www.youtube.com/watch?v=UlNCOrYkQBI';

    case 'georgia':
    case 'ga':
      return 'https://www.youtube.com/watch?v=Ap0e_O2RiLw';

    case 'hawaii':
    case 'hi':
      return 'https://www.youtube.com/watch?v=6n6xAo2T-6o';

    case 'idaho':
    case 'id':
      return 'https://www.youtube.com/watch?v=c9RguBn58Iw';

    case 'illinois':
    case 'il':
      return 'https://www.youtube.com/watch?v=8msQE61eREE';

    case 'indiana':
    case 'in':
      return 'https://www.youtube.com/watch?v=2E2Whkw6wJw';

    case 'iowa':
    case 'ia':
      return 'https://www.youtube.com/watch?v=nEN3Wuo2RmI';

    case 'kansas':
    case 'ks':
      return 'https://www.youtube.com/watch?v=YwsELW1L0nM';

    case 'kentucky':
    case 'ky':
      return 'https://www.youtube.com/watch?v=SLarfndxNAg';

    case 'louisiana':
    case 'la':
      return 'https://www.youtube.com/watch?v=XtPU67RznWQ';

    case 'maine':
    case 'me':
      return 'https://www.youtube.com/watch?v=g1gdYGvoXEA';

    case 'maryland':
    case 'md':
      return 'https://www.youtube.com/watch?v=ClBtYKEt5FU';

    case 'massachusetts':
    case 'ma':
      return 'https://www.youtube.com/watch?v=8uZywLgUWr0';

    case 'michigan':
    case 'mi':
      return 'https://www.youtube.com/watch?v=w_pk22R6O7w';

    case 'minnesota':
    case 'mn':
      return 'https://www.youtube.com/watch?v=UtXybSbIOMc';

    case 'mississippi':
    case 'ms':
      return 'https://www.youtube.com/watch?v=qOUNGL5mdDI';

    case 'missouri':
    case 'mo':
      return 'https://www.youtube.com/watch?v=YU-IlCoBi-8';

    case 'montana':
    case 'mt':
      return 'https://www.youtube.com/watch?v=NLAUFj-4zXY';

    case 'nebraska':
    case 'ne':
      return 'https://www.youtube.com/watch?v=P8Y562yAbyo';

    case 'nevada':
    case 'nv':
      return 'https://www.youtube.com/watch?v=x2_lHK93f8s';

    case 'new-hampshire':
    case 'newhampshire':
    case 'nh':
      return 'https://www.youtube.com/watch?v=G8nJ95oCPU0';

    case 'new-jersey':
    case 'newjersey':
    case 'nj':
      return 'https://www.youtube.com/watch?v=XDEaYHbGieo';

    case 'new-mexico':
    case 'newmexico':
    case 'nm':
      return 'https://www.youtube.com/watch?v=6RKCG5_Uq_Q';

    case 'new-york':
    case 'newyork':
    case 'ny':
      return 'https://www.youtube.com/watch?v=2K5a_NmSoYE';

    case 'north-carolina':
    case 'northcarolina':
    case 'nc':
      return 'https://www.youtube.com/watch?v=14AJJjXjknQ';

    case 'north-dakota':
    case 'northdakota':
    case 'nd':
      return 'https://www.youtube.com/watch?v=gFJ5qeT-Jzk';

    case 'ohio':
    case 'oh':
      return 'https://www.youtube.com/watch?v=qCvdjNnT0Qc';

    case 'oklahoma':
    case 'ok':
      return 'https://www.youtube.com/watch?v=nPY6d-BUClc';

    case 'oregon':
    case 'or':
      return 'https://www.youtube.com/watch?v=mI8D_eWAWPo';

    case 'pennsylvania':
    case 'pa':
      return 'https://www.youtube.com/watch?v=AMJQ5pqiRNA';

    case 'rhode-island':
    case 'rhodeisland':
    case 'ri':
      return 'https://www.youtube.com/watch?v=NN5NLNqyWD0';

    case 'south-carolina':
    case 'southcarolina':
    case 'sc':
      return 'https://www.youtube.com/watch?v=83XBcxZQaiM';

    case 'south-dakota':
    case 'southdakota':
    case 'sd':
      return 'https://www.youtube.com/watch?v=pduL3Yyx410';

    case 'tennessee':
    case 'tn':
      return 'https://www.youtube.com/watch?v=K6fYHqrS5FA';

    case 'texas':
    case 'tx':
      return 'https://www.youtube.com/watch?v=BWas4N2d-0E';

    case 'utah':
    case 'ut':
      return 'https://www.youtube.com/watch?v=xpFw9EvEjWY';

    case 'vermont':
    case 'vt':
      return 'https://www.youtube.com/watch?v=kdVjzsLbrpU';

    case 'virginia':
    case 'va':
      return 'https://www.youtube.com/watch?v=Ogth3fmIaME';

    case 'washington':
    case 'wa':
      return 'https://www.youtube.com/watch?v=ju1maRPLz8Y';

    case 'washington-dc':
    case 'washingtondc':
    case 'dc':
      return 'https://www.youtube.com/watch?v=caPj8bMmC1Y';

    case 'west-virginia':
    case 'westvirginia':
    case 'wv':
      return 'https://www.youtube.com/watch?v=GidAHJ8O8Gw';

    case 'wisconsin':
    case 'wi':
      return 'https://www.youtube.com/watch?v=T8Uek3S1BUs';

    case 'wyoming':
    case 'wy':
      return 'https://www.youtube.com/watch?v=ZropUXblV8I';

    case 'the-unincorporated-territories':
    case 'theunincorporatedterritories':
    case 'puerto-rico':
    case 'puertorico':
    case 'pr':
    case 'guam':
    case 'gu':
    case 'american-samoa':
    case 'americansamoa':
    case 'us-virgin-islands':
    case 'usvirginislands':
    case 'virgin-islands':
    case 'virginislands':
    case 'vi':
    case 'northern-mariana-islands':
    case 'northernmarianaislands':
    case 'mariana-islands':
    case 'marianaislands':
      return 'https://www.youtube.com/watch?v=QwMyflTCFLc';

    case 'military':
    case 'overseas':
    case 'abroad':
      return 'https://www.youtube.com/watch?v=eg5Qh4anBZE';

    // For everything else, just go to the channel's page
    default:
      return 'https://www.youtube.com/c/howtovoteineverystate';
  }
}

header('Location: '.get_redirect_url($hash));
die();
