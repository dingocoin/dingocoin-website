// Where To Buy Scroller 
const baseURL = "";
    const baseImgURL = "https://dingocoin.com/img/exchanges/";

    const exchanges = [
	  { name: "AscendEX", img: "ascendex-2" },	
      { name: "MEXC", img: "mexc-2" },
      { name: "BitMart", img: "bitmart-2" },
      { name: "LBank", img: "lbank-2" },
      { name: "XT", img: "xt-2" },
      { name: "TradeOgre", img: "tradeogre-2" },
      { name: "Xeggex", img: "xeggex-2" },
      { name: "Uniswap", img: "uniswap-2" },
      { name: "Pancakeswap", img: "pancakeswap-2" },
	    { name: "Raydium", img: "raydium-2" },
	    { name: "CoinEx", img: "coinex-2" },
      { name: "BIT", img: "bitcom-2" },
    ];

    function createLogos() {
      return exchanges.map(exchange => `
        <a href="${baseURL}" class="where-logo" title="Available on ${exchange.name}">
          <img src="${baseImgURL}${exchange.img}.webp" alt="${exchange.name} logo" loading="lazy" />
        </a>
      `).join('');
    }

    document.addEventListener('DOMContentLoaded', () => {
      const slider = document.querySelector('.where-slider');

      if (slider) {
        // Inject content twice for seamless loop
        slider.innerHTML = createLogos() + createLogos();
        
        // Set animation duration based on content length and speed requirement
        const duration = 30; // in seconds
        slider.style.setProperty('--animation-duration', `${duration}s`);
      } else {
        console.error('Slider element not found');
      }
    });