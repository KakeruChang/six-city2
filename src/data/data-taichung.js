import SideTitleImg20Years from '../assets/Taichung/SVG/Taichung_next_20years.svg'
import SideTitleImgInvariant from '../assets/Taichung/SVG/Taichung_unchanged.svg'
import SideTitleImgVariant from '../assets/Taichung/SVG/Taichung_changed.svg'
import SideTitleImgDisappear from '../assets/Taichung/SVG/Taichung_disappear_landmark.svg'

import cityBgWebImg0 from '../assets/Taichung/web/1_Taichung_railway_bg_web.jpg'
import cityBgWebImg1 from '../assets/Taichung/web/2_Taichung_market_bg_web.jpg'
import cityBgWebImg2 from '../assets/Taichung/web/3_Taichung_woodcarving_bg_web.jpg'
import cityBgWebImg3 from '../assets/Taichung/web/4_Taichung_Qingshui_bg_web.jpg'
import cityBgWebImg4 from '../assets/Taichung/web/5_Taichung_mazu_bg_web.jpg'
import cityBgWebImg5 from '../assets/Taichung/web/6_Taichung_photo_bg_web.jpg'
import cityBgWebImg7 from '../assets/Taichung/web/7_Taichung_freshair_bg_web.jpg'
import cityBgWebImg8 from '../assets/Taichung/web/8_Taichung_Fengyuan_bg_web.jpg'

import cityBgPadImg0 from '../assets/Taichung/pad/1_Taichung_railway_bg_mob.jpg'
import cityBgPadImg1 from '../assets/Taichung/pad/2_Taichung_market_bg_mob.jpg'
import cityBgPadImg2 from '../assets/Taichung/pad/3_Taichung_woodcarving_bg_mob.jpg'
import cityBgPadImg3 from '../assets/Taichung/mob/4_Taichung_Qingshui_bg_mob.jpg'
import cityBgPadImg4 from '../assets/Taichung/pad/5_Taichung_mazu_bg_mob.jpg'
import cityBgPadImg5 from '../assets/Taichung/pad/6_Taichung_photo_bg_mob.jpg'
import cityBgPadImg7 from '../assets/Taichung/pad/7_Taichung_freshair_bg_mob.jpg'
import cityBgPadImg8 from '../assets/Taichung/pad/8_Taichung_Fengyuan_bg_mob.jpg'

import cityBgMobImg0 from '../assets/Taichung/mob/1_Taichung_railway_bg_mob.jpg'
import cityBgMobImg1 from '../assets/Taichung/mob/2_Taichung_market_bg_mob.jpg'
import cityBgMobImg2 from '../assets/Taichung/mob/3_Taichung_woodcarving_bg_mob.jpg'
import cityBgMobImg3 from '../assets/Taichung/mob/4_Taichung_Qingshui_bg_mob.jpg'
import cityBgMobImg4 from '../assets/Taichung/mob/5_Taichung_mazu_bg_mob.jpg'
import cityBgMobImg5 from '../assets/Taichung/mob/6_Taichung_photo_bg_mob.jpg'
import cityBgMobImg7 from '../assets/Taichung/mob/7_Taichung_freshair_bg_mob.jpg'
import cityBgMobImg8 from '../assets/Taichung/mob/8_Taichung_Fengyuan_bg_mob.jpg'

const articleContent = [
  {
    titleOut: '台中人都等過的平交道',
    GATitle: 'page read: 台中人都等過的平交道',
    textOut: [
      '隨著台中市進入鐵路高架化時代，等平交道、過地下道的街頭風景不復存在，也象徵城市發展邁入新階段。'
    ],
    inside: {
      title: ['那些年', '我們一起等的平交道']
    },
    url: 'railway',
    id: 'railway',
    sideTitleImg: SideTitleImgDisappear,
    img: {
      bg: { web: cityBgWebImg0, pad: cityBgPadImg0, mob: cityBgMobImg0 }
    },
    meta: {
      title: '那些年 台中人一起等過的平交道 | 專題 | 聯合報',
      description:
        '隨著台中市進入鐵路高架化時代，等平交道、過地下道的街頭風景不復存在，也象徵城市發展邁入新階段。'
    }
  },
  {
    titleOut: '中區活歷史',
    GATitle: 'page read: 中區活歷史',
    textOut: [
      '在第二市場開業第98年的慶周青果行，曾是歷任總統到台中買水果的首選，客人絡繹不絕，陪著中區從繁榮到沒落。'
    ],
    inside: {
      title: ['中區活歷史', '開業第98年的慶周青果行']
    },
    url: 'market',
    id: 'market',
    sideTitleImg: SideTitleImgInvariant,
    img: {
      bg: { web: cityBgWebImg1, pad: cityBgPadImg1, mob: cityBgMobImg1 }
    },
    meta: {
      title: '歷任總統都來買 98年老青果行寫台中歷史 | 專題 | 聯合報',
      description:
        '在第二市場開業第98年的慶周青果行，曾是歷任總統到台中買水果的首選，客人絡繹不絕，陪著台中市中區從繁榮到沒落。'
    }
  },
  {
    titleOut: '木彫見證台中產業變遷',
    GATitle: 'page read: 木彫見證台中產業變遷',
    textOut: [
      '刻過太陽堂等老餅舖的餅模，也刻出全台名勝的匾額，三代經營的陳彫刻處是台中產業和生活樣貌變遷的見證者。'
    ],
    inside: {
      title: ['95歲陳彫刻處：', '老職人、新靈魂']
    },
    url: 'woodcarving',
    id: 'woodcarving',
    sideTitleImg: SideTitleImgInvariant,
    img: {
      bg: { web: cityBgWebImg2, pad: cityBgPadImg2, mob: cityBgMobImg2 }
    },
    meta: {
      title: '95歲陳彫刻處：老職人、新靈魂 | 專題 | 聯合報',
      description:
        '刻過太陽堂等老餅舖的餅模，也刻出全台名勝的匾額，三代經營的陳彫刻處是台中產業和生活樣貌變遷的見證者。'
    }
  },
  {
    titleOut: '清水故事 我們的身世',
    GATitle: 'page read: 清水故事 我們的身世',
    textOut: [
      '出生於工人家庭的楊慧姿，過去從沒有好好看過這片給她生命養分的土地，於是她返鄉，追尋清水的故事與身世。'
    ],
    inside: { title: ['清水的故事，我們的身世：', '找回世代與土地的鏈結'] },
    url: 'Qingshui',
    id: 'Qingshui',
    sideTitleImg: SideTitleImgVariant,
    img: {
      bg: { web: cityBgWebImg3, pad: cityBgPadImg3, mob: cityBgMobImg3 }
    },
    meta: {
      title: '清水的故事 我們的身世 | 專題 | 聯合報',
      description:
        '出生於工人家庭的楊慧姿，過去從沒有好好看過這片給她生命養分的土地，於是她返鄉，追尋清水的故事與身世。'
    }
  },
  {
    titleOut: '年輕人瘋媽祖',
    GATitle: 'page read: 年輕人瘋媽祖',
    textOut: [
      '跟著歷年照片回顧大甲媽祖遶境的氣氛轉變，一窺年輕人為什麼會被「老扣扣」的宗教活動吸引。'
    ],
    inside: { title: ['年輕人最潮休閒：跟著媽祖遶境去'] },
    url: 'mazu',
    id: 'mazu',
    sideTitleImg: SideTitleImgVariant,
    img: {
      bg: { web: cityBgWebImg4, pad: cityBgPadImg4, mob: cityBgMobImg4 }
    },
    meta: {
      title: '老照片看大甲媽祖變遷 年輕人為何瘋遶境？| 專題 | 聯合報',
      description:
        '大甲鎮瀾宮媽祖遶境每年萬頭攢動、人潮洶湧的畫面，已是大家心目中鮮明的台中印象之一。跟著歷年照片回顧大甲媽祖遶境的氣氛轉變，一窺年輕人為什麼會被「老扣扣」的宗教活動吸引。'
    }
  },
  {
    titleOut: '網美心中的打卡城市',
    GATitle: 'page read: 網美心中的打卡城市',
    textOut: [
      '從最早的東海大學路思義教堂，到現在熱門的千越大樓、審計新村，台中的拍照聖地常在改變，是網美心目中的打卡城市。'
    ],
    inside: { title: ['網美心中的打卡城市'] },
    url: 'photo',
    id: 'photo',
    sideTitleImg: SideTitleImgVariant,
    img: {
      bg: { web: cityBgWebImg5, pad: cityBgPadImg5, mob: cityBgMobImg5 }
    },
    meta: {
      title: '網美心中的打卡城市| 專題 | 聯合報',
      description:
        '從最早的東海大學路思義教堂，到現在熱門的千越大樓、審計新村、孵空間，台中的拍照聖地常在改變，是網美心目中的打卡城市。'
    }
  },
  {
    GATitle: 'page read: 台中 連接上下20年的文字',
    textOut: [
      '「不熱、舒適、宜居」，過去是台中人最喜歡與驕傲的城市特色，但這樣生活舒適感，因為空汙正慢慢消失。',
      '隨時有新的打卡拍照熱點，為台中市帶來人潮，但拍完照之後呢？',
      '如何讓土地更好、下一代可以自由呼吸，以及城市想和大家說些什麼故事，是台中正在思考的課題。'
    ],
    id: 'taichung-middle',
    sideTitleImg: SideTitleImg20Years
  },
  {
    titleOut: '為女兒奮戰的熱血老爸',
    GATitle: 'page read: 為女兒奮戰的熱血老爸',
    textOut: [
      '看到孩子枕頭淌血、氣喘加劇，江慶洲推動空氣盒子認養，動員鄉親力量監測空氣品質，要為下一代留清新空氣。'
    ],
    inside: { title: ['解定存砸積蓄', '老爸要為下一代留清新空氣'] },
    url: 'freshair',
    id: 'freshair',
    sideTitleImg: SideTitleImg20Years,
    img: {
      bg: { web: cityBgWebImg7, pad: cityBgPadImg7, mob: cityBgMobImg7 }
    },
    meta: {
      title: '解定存砸積蓄 老爸要為下一代留清新空氣 | 專題 | 聯合報',
      description:
        '「氣候舒適、宜居」過去是台中人最驕傲的城市特色，但這樣生活舒適感，因為空污正慢慢消失。看到孩子枕頭淌血、氣喘加劇，江慶洲動員鄉親力量監測空氣品質，要為下一代留清新空氣。'
    }
  },
  {
    titleOut: '重拾豐原人的驕傲',
    GATitle: 'page read: 重拾豐原人的驕傲',
    textOut: [
      '古蹟文創、網美景點.....不是帶動人氣、城市發展唯一的路，在地年輕人想幫曾經商業發達的山線重鎮找未來。'
    ],
    inside: { title: ['為豐原人搭一條回家的路'] },
    url: 'Fengyuan',
    id: 'Fengyuan',
    sideTitleImg: SideTitleImg20Years,
    img: {
      bg: { web: cityBgWebImg8, pad: cityBgPadImg8, mob: cityBgMobImg8 }
    },
    meta: {
      title: '為豐原人搭一條回家的路| 專題 | 聯合報',
      description:
        '古蹟文創、網美景點，不是帶動人氣、城市發展唯一的路。豐原在地年輕人傅智恆想幫曾經商業發達的山線重鎮找未來，為山線年輕人搭出一條回家的路。'
    }
  }
]

export default articleContent
