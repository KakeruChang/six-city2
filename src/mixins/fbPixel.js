const sendFbPixel = content => {
  window.fbq('trackSingleCustom', '321350072644130', `專題-${content}`)
}

export { sendFbPixel }
