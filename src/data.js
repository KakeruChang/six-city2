import SideTitleImg20Years from './assets/Taipei/SVG words/20-years.svg'
import SideTitleImgInvariant from './assets/Taipei/SVG words/invariant.svg'
import SideTitleImgVariant from './assets/Taipei/SVG words/variant.svg'
import SideTitleImgLandscape from './assets/Taipei/SVG words/landscape.svg'
import taipeiBgWebImg0 from './assets/Taipei/web/1_Taipei_eslite_bg.jpg'
import taipeiBgWebImg1 from './assets/Taipei/web/2_Taipei_taipei_main_station_bg.jpg'
import taipeiBgWebImg2 from './assets/Taipei/web/3_Taipei_sense_of_calling_bg.jpg'
import taipeiBgWebImg3 from './assets/Taipei/web/4_Taipei_democracy.jpg'
import taipeiBgWebImg4 from './assets/Taipei/web/5_Taipei_ximen_bg.jpg'
import taipeiBgWebImg5 from './assets/Taipei/web/6_Taipei_stand_up_comedy_bg.jpg'
import taipeiBgWebImg6 from './assets/Taipei/web/7_Taipei_food_bg.jpg'
import taipeiBgWebImg8 from './assets/Taipei/web/8_Taipei_causeway_bay_books_bg.jpg'
import taipeiBgWebImg9 from './assets/Taipei/web/9_Taipei_paradox_bg.jpg'

import taipeiBgPadImg0 from './assets/Taipei/pad/1_Taipei_eslite_bg_mob.jpg'
import taipeiBgPadImg1 from './assets/Taipei/pad/2_Taipei_taipei_main_station_bg_mob.jpg'
import taipeiBgPadImg2 from './assets/Taipei/pad/3_Taipei_sense_of_calling_bg_mob.jpg'
import taipeiBgPadImg3 from './assets/Taipei/pad/4_Taipei_democracy_bg_mob.jpg'
import taipeiBgPadImg4 from './assets/Taipei/pad/5_Taipei_ximen_bg_mob.jpg'
import taipeiBgPadImg5 from './assets/Taipei/pad/6_Taipei_stand_up_comedy_bg_mob.jpg'
import taipeiBgPadImg6 from './assets/Taipei/pad/7_Taipei_food_bg_mob.jpg'
import taipeiBgPadImg8 from './assets/Taipei/pad/8_Taipei_causeway_bay_books_bg_mob.jpg'
import taipeiBgPadImg9 from './assets/Taipei/pad/9_Taipei_paradox_bg_mob.jpg'

import taipeiBgMobImg0 from './assets/Taipei/mob/1_Taipei_eslite_bg_mob.jpg'
import taipeiBgMobImg1 from './assets/Taipei/mob/2_Taipei_taipei_main_station_bg_mob.jpg'
import taipeiBgMobImg2 from './assets/Taipei/mob/3_Taipei_sense_of_calling_bg_mob.jpg'
import taipeiBgMobImg3 from './assets/Taipei/mob/4_Taipei_democracy_bg_mob.jpg'
import taipeiBgMobImg4 from './assets/Taipei/mob/5_Taipei_ximen_bg_mob.jpg'
import taipeiBgMobImg5 from './assets/Taipei/mob/6_Taipei_stand_up_comedy_bg_mob.jpg'
import taipeiBgMobImg6 from './assets/Taipei/mob/7_Taipei_food_bg_mob.jpg'
import taipeiBgMobImg8 from './assets/Taipei/mob/8_Taipei_causeway_bay_books_bg_mob.jpg'
import taipeiBgMobImg9 from './assets/Taipei/mob/9_Taipei_paradox_bg_mob.jpg'

const articleContent = [
  {
    titleOut: '走入歷史的誠品敦南店',
    textOut: [
      '台北這座城市不斷向前滾動，城市面貌也持續翻新，隨著誠品敦南店熄燈，一個世代的象徵也劃下句點。'
    ],
    inside: {
      title: ['走入歷史的誠品敦南店']
      // article: {
      //   '0': [
      //     '陪伴讀者30年的誠品敦南店，在2020年6月1日凌晨熄燈。',
      //     '誠品敦南店是全球首家24小時書店，也曾是台灣的文化地標與城市之光，而隨著熄燈號吹起，敦南誠品24小時書店的閱讀風景與無數人的青春記憶，也正式走入歷史。',
      //     '1989年，第一家誠品書店於台北仁愛敦南圓環旁開幕，6年後搬到誠品敦南店現址，誠品舉辦一場盛大的「今日不打烊」搬遷派對，讀者到凌晨4點還不肯散去，同時間誠品也舉辦「看不見的書店」徵文，有4成讀者希望書店不打烊，給了經營團隊新的靈感：何不來辦一間不打烊書店？'
      //   ]
      // }
    },
    url: 'eslite',
    id: 'eslite',
    // sideTitle: [{ text: '消失的地景', color: '#706f6f' }],
    sideTitleImg: SideTitleImgLandscape,
    img: {
      bg: { web: taipeiBgWebImg0, pad: taipeiBgPadImg0, mob: taipeiBgMobImg0 }
    },
    video: 'http://nmdap.udn.com.tw/test/meta/media/11point4MB.mp4'
  },
  {
    titleOut: '在北車停下腳步的理由',
    textOut: [
      '除了「新」，台北還留下什麼？在台北車站，仍有幾間老字號書店，努力延續著台北書店街的書香味。'
    ],
    inside: {
      title: ['台北書店街', '在北車停下腳步的理由']
    },
    url: 'taipei-main-station',
    id: 'taipei-main-station',
    // sideTitle: [
    //   { text: '台北的', color: '#706f6f' },
    //   { text: '不變', color: '#ff2300' }
    // ],
    sideTitleImg: SideTitleImgInvariant,
    img: {
      bg: { web: taipeiBgWebImg1, pad: taipeiBgPadImg1, mob: taipeiBgMobImg1 }
    },
    video: 'http://nmdap.udn.com.tw/test/meta/media/32point6MB.mp4'
  },
  {
    titleOut: '台北人的使命感',
    textOut: [
      '那台北人呢？為了跟上這座城市的腳步，台北人得快速習得各項生存技能，才能繼續推動台灣往前邁進。'
    ],
    inside: { title: ['台北人的使命感：', '讓台灣被世界看見'] },
    url: 'sense-of-calling',
    id: 'sense-of-calling',
    // sideTitle: [
    //   { text: '台北的', color: '#706f6f' },
    //   { text: '變', color: '#ff2300' }
    // ],
    sideTitleImg: SideTitleImgVariant,
    img: {
      bg: { web: taipeiBgWebImg2, pad: taipeiBgPadImg2, mob: taipeiBgMobImg2 }
    }
  },
  {
    titleOut: '上凱道的一百種方式',
    textOut: [
      '這20多年來，凱道變成人民的凱道，民眾開始走上街，探索讓自己的聲音被政府和社會聽見的不同方式。'
    ],
    inside: {
      title: ['上凱道的一百種方式']
    },
    url: 'democracy',
    id: 'democracy',
    // sideTitle: [
    //   { text: '台北的', color: '#706f6f' },
    //   { text: '變', color: '#ff2300' }
    // ],
    sideTitleImg: SideTitleImgVariant,
    img: {
      bg: { web: taipeiBgWebImg3, pad: taipeiBgPadImg3, mob: taipeiBgMobImg3 }
    }
  },
  {
    titleOut: '迎向陽光的同志文化',
    textOut: [
      '隨著西門町紅樓的同志酒吧興起，台北同志族群也開始「從地下室走到陽光下」，成為亞洲同志圈的模範。'
    ],
    inside: {
      title: ['西門紅樓', '迎向陽光的同志文化']
    },
    url: 'ximen',
    id: 'ximen',
    // sideTitle: [
    //   { text: '台北的', color: '#706f6f' },
    //   { text: '變', color: '#ff2300' }
    // ],
    sideTitleImg: SideTitleImgVariant,
    img: {
      bg: { web: taipeiBgWebImg4, pad: taipeiBgPadImg4, mob: taipeiBgMobImg4 }
    }
  },
  {
    titleOut: '用喜劇收服難搞的台北人',
    textOut: [
      '台北人習得各項生存技能後，卻也變得挑剔，想要滿足台北人的胃口，就得先認清台北人有多「難搞」。'
    ],
    inside: {
      title: ['卡米地', '用喜劇收服難搞的台北人']
    },
    url: 'stand-up-comedy',
    id: 'stand-up-comedy',
    // sideTitle: [
    //   { text: '台北的', color: '#706f6f' },
    //   { text: '變', color: '#ff2300' }
    // ],
    sideTitleImg: SideTitleImgVariant,
    img: {
      bg: { web: taipeiBgWebImg5, pad: taipeiBgPadImg5, mob: taipeiBgMobImg5 }
    }
  },
  {
    titleOut: '台北人的味蕾',
    textOut: [
      '台北餐廳的汰換率就跟台北人的步調一樣快，未來，台北人的餐桌上又將呈現什麼風景？'
    ],
    inside: { title: ['台北人的味蕾'] },
    url: 'food',
    id: 'food',
    // sideTitle: [
    //   { text: '台北的', color: '#706f6f' },
    //   { text: '變', color: '#ff2300' }
    // ],
    sideTitleImg: SideTitleImgVariant,
    img: {
      bg: { web: taipeiBgWebImg6, pad: taipeiBgPadImg6, mob: taipeiBgMobImg6 }
    }
  },
  {
    textOut: [
      '這個20年，是台北的思想變得多元、開放，逐漸與國際接軌的20年。但在新與舊、開放與傳統的交雜間，各種衝突、拉扯也隨之浮現。',
      '在歷經不斷對話、溝通，不同思想相互碰撞、激盪後，下個20年，台北將被帶往何處？'
    ],
    id: 'test7',
    // sideTitle: [
    //   { text: '台北', color: '#706f6f' },
    //   { text: '下個20年', color: '#ff2300' }
    // ],
    sideTitleImg: SideTitleImg20Years
  },
  {
    titleOut: '為什麼台北需要銅鑼灣書店？',
    textOut: [
      '儘管有再多獨立書店，台北仍需要一間「銅鑼灣書店」，化解傳統和自由民主間的矛盾。'
    ],
    inside: { title: ['為什麼台北需要銅鑼灣書店？'] },
    url: 'causeway-bay-books',
    id: 'causeway-bay-books',
    // sideTitle: [
    //   { text: '台北', color: '#706f6f' },
    //   { text: '下個20年', color: '#ff2300' }
    // ],
    sideTitleImg: SideTitleImg20Years,
    img: {
      bg: { web: taipeiBgWebImg8, pad: taipeiBgPadImg8, mob: taipeiBgMobImg8 }
    }
  },
  {
    titleOut: '台北正處於矛盾、拉扯的狀態',
    textOut: [
      '經過不斷對話與討論，台北的各種對立與衝突，終將找到妥協的空間，舊思維和新思維也會找到一個平衡點。'
    ],
    inside: {
      title: ['左轉有書張慧如：', '台北正處於矛盾、拉扯的狀態']
    },
    url: 'paradox',
    id: 'paradox',
    // sideTitle: [
    //   { text: '台北', color: '#706f6f' },
    //   { text: '下個20年', color: '#ff2300' }
    // ],
    sideTitleImg: SideTitleImg20Years,
    img: {
      bg: { web: taipeiBgWebImg9, pad: taipeiBgPadImg9, mob: taipeiBgMobImg9 }
    }
  }
]

export default articleContent
