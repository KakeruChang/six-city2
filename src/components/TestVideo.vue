<template>
  <div class="video">
    <div ref="videoContainer" class="video-container">
      <youtube
        width="100%"
        :height="videoHeight"
        :player-vars="playerVars"
        ref="youtube"
        @ended="ending"
        @playing="playing"
        :video-id="videoId"
      ></youtube>
    </div>
    <div class="video-cover" />
  </div>
</template>

<script>
export default {
  name: 'TestVideo',
  components: {},
  data() {
    return {
      sound: false,
      videoId: 'DVBXguBM2U0',
      isShowReplay: false,
      playerVars: {
        rel: 0,
        controls: 1,
        version: 3,
        showinfo: 0,
        height: 500,
        ecver: 2,
        playsinline: 1,
        modestbranding: 0, // 隱藏YouTube Logo
        loop: 1, // 重覆播放
        playlist: 'DVBXguBM2U0', // 當使用影片要重覆播放時，需再輸入YouTube 影片ID
        fs: 0, // 隱藏全螢幕按鈕
        cc_load_policty: 0, // 隱藏字幕
        iv_load_policy: 0, // 隱藏影片註解
        autohide: 1,
        mute: 0
      },
      videoHeight: 0,
      videoAdjust: 0,
      videoControlOption: {
        root: document.querySelector('.video'),
        rootMargin: '0px',
        threshold: [0.3, 0.7]
      }
    }
  },
  methods: {
    // playVideo() {
    //   this.player.playVideo()
    // },
    playing() {
      this.isShowReplay = false
    },
    ending() {
      this.isShowReplay = true
    },
    handleVideoControl(entries) {
      if (entries[0].intersectionRatio > 0.5) {
        console.log('play')
        this.player.playVideo()
      } else {
        console.log('pause')
        this.player.pauseVideo()
      }
    }
  },
  computed: {
    player() {
      return this.$refs.youtube.player
    }
  },
  mounted() {
    const intersectionObserver = new IntersectionObserver(
      this.handleVideoControl,
      this.videoControlOption
    )
    // start observing
    intersectionObserver.observe(this.$el)
  }
}
</script>
<style lang="scss" scoped>
.video {
  width: 100vw;
  max-width: 100%;
  height: 100vh;
}
.video-cover {
  position: absolute;
  z-index: 2;
  width: 100vw;
  max-width: 100%;
  height: 100vh;
}
.video-container {
  position: absolute;
  z-index: 1;
  height: 100vh;
  width: calc(100vw);
  box-sizing: border-box;
  overflow: hidden;

  // video {
  //   position: absolute;
  //   bottom: 0px;
  //   left: 50%;
  //   transform: translate(-50%, 0);
  //   width: 100%;
  //   height: 100vh;
  //   @media screen and (min-width: 520px) {
  //     height: 110%;
  //     bottom: -5%;
  //   }
  //   @media screen and (min-width: 760px) {
  //     height: 110%;
  //     bottom: -1%;
  //   }
  //   @media screen and (min-width: 960px) {
  //   }

  //   @media screen and (min-width: 1280px) {
  //     height: 120%;
  //   }
  //   @media screen and (min-width: 1520px) {
  //   }
  // }
}
// .decorative-wave-top {
//   position: absolute;
//   top: 0px;
//   left: 0;
//   width: 100%;
//   z-index: 1;
// }
// .decorative-wave-bottom {
//   position: absolute;
//   bottom: 0px;
//   left: 0;
//   width: 100%;
// }
</style>
<style lang="scss">
iframe {
  height: 100vh;
}
</style>
