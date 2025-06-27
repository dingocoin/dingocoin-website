const blogPosts = [
    {
        title: "How Dingocoin's Governance Works",
        url: "https://blog.dingocoin.com/how-dingocoins-governance-works/",
        thumbnail: "./img/blog/how-dingo-works.webp",
        excerpt: "Discover how Dingocoin's unique governance model works, empowering the community to make key decisions about the project's future...",
        seo: { keywords: ["Dingocoin", "governance", "crypto"], description: "Learn about Dingocoin's governance model." },
        bestPractices: "Ensure to engage the community for feedback.",
        performance: "Optimized for fast loading times."
    },
    {
        title: "Litecoin vs Dingocoin: How We Stack Up",
        url: "https://blog.dingocoin.com/litecoin-vs-dingocoin-how-we-stack-up/",
        thumbnail: "./img/blog/lite-dingo.webp",
        excerpt: "A comprehensive comparison between Dogecoin and Dingocoin, exploring the unique features and advantages of each cryptocurrency...",
        seo: { keywords: ["Litecoin", "Dingocoin", "comparison"], description: "Compare Litecoin and Dingocoin." },
        bestPractices: "Highlight unique features clearly.",
        performance: "Ensure images are optimized."
    },
    {
        title: "Is Dingocoin Old at 4 Years?",
        url: "https://blog.dingocoin.com/is-dingocoin-old-at-4-years/",
        thumbnail: "./img/blog/is-dingo-old.webp",
        excerpt: "A Look Back at Our Journey—and How We Fended Off a Major Threat When it comes to crypto, four years...",
        seo: { keywords: ["Dingocoin", "history", "crypto"], description: "Explore Dingocoin's journey over four years." },
        bestPractices: "Use engaging storytelling.",
        performance: "Minimize loading time for images."
    },
    {
        title: "Dingocoin: Standing Out in a Frenzied Crypto World",
        url: "https://blog.dingocoin.com/dingocoin-standing-out-in-a-frenzied-crypto-world/",
        thumbnail: "./img/blog/dingo-standing-out.webp",
        excerpt: "Explore how Dingocoin differentiates itself in the crowded cryptocurrency market with its unique features and strong community...",
        seo: { keywords: ["Dingocoin", "crypto market", "community"], description: "Learn how Dingocoin stands out." },
        bestPractices: "Engage with the community regularly.",
        performance: "Optimize for mobile users."
    },
    {
        title: "Dogecoin vs. Dingocoin: How We Stack Up",
        url: "https://blog.dingocoin.com/dogecoin-vs-dingocoin-how-we-stack-up/",
        thumbnail: "./img/blog/doge-dingo.webp",
        excerpt: "Dingocoin stands out as a modern, community-driven challenger to Bitcoin Cash in the crypto payments space. With 10 times faster...",
        seo: { keywords: ["Dogecoin", "Dingocoin", "comparison"], description: "Compare Dogecoin and Dingocoin." },
        bestPractices: "Provide clear comparisons.",
        performance: "Ensure fast loading for better user experience."
    },
    {
        title: "Bitcoin Cash vs. Dingocoin: How We Stack Up",
        url: "https://blog.dingocoin.com/bitcoin-cash-vs-dingocoin-how-we-stack-up/",
        thumbnail: "./img/blog/btcash-dingo.webp",
        excerpt: "Discover the compelling reasons why Dingocoin could be your next cryptocurrency investment, from technology to community...",
        seo: { keywords: ["Bitcoin Cash", "Dingocoin", "investment"], description: "Reasons to invest in Dingocoin." },
        bestPractices: "Highlight investment benefits.",
        performance: "Use analytics to track performance."
    },
    {
        title: "Top 5 Reasons to Invest in Dingocoin Today",
        url: "https://blog.dingocoin.com/top-5-reasons-to-invest-in-dingocoin-today/",
        thumbnail: "./img/blog/top-5-reasons.webp",
        excerpt: "Understanding the difference between Dingocoin and wDingocoin, and how they work together in the ecosystem...",
        seo: { keywords: ["Dingocoin", "investment", "wDingocoin"], description: "Top reasons to invest in Dingocoin." },
        bestPractices: "Provide clear, actionable insights.",
        performance: "Optimize content for SEO."
    },
    {
        title: "Dingo Browser Wallet – How to Install and Migrate",
        url: "https://blog.dingocoin.com/dingo-browser-wallet-how-to-install-and-migrate/",
        thumbnail: "./img/blog/dingo-browser.webp",
        excerpt: "Learn how to start mining Dingocoin using ProHashing with this comprehensive guide for beginners...",
        seo: { keywords: ["Dingo Browser Wallet", "installation", "migration"], description: "Guide to installing Dingo Browser Wallet." },
        bestPractices: "Include step-by-step instructions.",
        performance: "Ensure quick access to resources."
    },
    {
        title: "What are Dingocoin and wDingocoin? Are they the same?",
        url: "https://blog.dingocoin.com/what-are-dingocoin-and-wdingocoin-are-they-the-same/",
        thumbnail: "./img/blog/dingo-wdingo.webp",
        excerpt: "Everything you need to know to get started with Dingocoin, from wallet setup to making your first transaction...",
        seo: { keywords: ["Dingocoin", "wDingocoin", "wallet setup"], description: "Understand Dingocoin and wDingocoin." },
        bestPractices: "Clarify differences effectively.",
        performance: "Optimize for user engagement."
    },
    {
        title: "How to Mine Dingocoin Using Prohashing",
        url: "https://blog.dingocoin.com/how-to-mine-dingocoin-using-prohashing/",
        thumbnail: "./img/blog/mine-dingo.webp",
        excerpt: "Mine Dingocoin using Prohashing, mining Dingocoin is now got even simpler with Prohashing as they provide hash power on a...",
        seo: { keywords: ["Dingocoin", "mining", "Prohashing"], description: "Guide on Mining Dingocoin." },
        bestPractices: "Use efficient mining software.",
        performance: "Monitor hash rates for optimal performance."
    }, 
    {
        title: "Hash-dollars The True Cost Of Attacking Dingocoin",
        url: "https://blog.dingocoin.com/hash-dollars-the-true-cost-of-attacking-dingocoin/",
        thumbnail: "./img/blog/Hashdollars.webp",
        excerpt: "In Proof of Work (PoW) cryptocurrencies, raw hash rates can be deceptive. Simply knowing a chain operates at \"1.51 PH/s\" (peta-hashes per second) doesn't automatically tell ...",
        seo: { keywords: ["Dingocoin", "PoW", "hashdollars"], description: "True Cost Of Attacking Dingocoin." },
        bestPractices: "Analyze hash rate implications.",
        performance: "Monitor network security metrics."
    },
    {
        title: "The Geelong Agreement a Fast and Scalable Dingocoin",
        url: "https://blog.dingocoin.com/the-geelong-agreement-a-fast-and-scalable-dingocoin/",
        thumbnail: "./img/blog/Hands-shaking.webp",
        excerpt: "Two of Dingocoin's Guardians, Dingoanna and Sean, recently met in Geelong, Australia—a city known for its forward-thinking culture and history of transformation...",
        seo: { keywords: ["Dingocoin", "geelong agreement", "fast", "scalable"], description: "Fast and Scalable Dingocoin" },
        bestPractices: "Fast and Scalable Dingocoin.",
        performance: "xxxx."
    }
];

let displayedPosts = new Set();
const postsPerLoad = 4;

function createBlogCard(post, index) {
    const isMockCard = post.url === '#';
    return `
        <div class="col-md-6 col-lg-3 mb-4" style="animation-delay: ${index * 0.1}s">
            <div class="card custom-card h-100">
                <img src="${post.thumbnail}" class="custom-card-img-top" alt="${post.title}" 
                     onerror="this.src='https://placehold.co/250x250/212529/FFFFFF/png?text=${encodeURIComponent(post.title)}'">
                <div class="custom-card-body">
                    <div class="custom-card-content">
                        <h5 class="custom-card-title">${post.title}</h5>
                        <p class="custom-card-text">${post.excerpt}</p>
                    </div>
                    <div class="text-center">
                        <a href="${post.url}" class="custom-card-link ${isMockCard ? 'disabled' : ''}" 
                           ${isMockCard ? 'aria-disabled="true"' : 'target="_blank"'}>
                            ${isMockCard ? 'Coming Soon' : 'Read Article'}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    `;
}

// Rename the function to shuffleBlogPosts
function shuffleBlogPosts(array) {
    const newArray = [...array];
    for (let i = newArray.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [newArray[i], newArray[j]] = [newArray[j], newArray[i]];
    }
    return newArray;
}

// Update the loadMorePosts function to use shuffled posts
function loadMorePosts() {
    const container = document.getElementById('blogPostsContainer');
    const availablePosts = blogPosts.filter(post => !displayedPosts.has(post.url));
    
    if (availablePosts.length === 0) {
        document.getElementById('loadMoreBtn').style.display = 'none';
        return;
    }

    // Shuffle the available posts before displaying
    const shuffledPosts = shuffleBlogPosts(availablePosts);
    const postsToAdd = shuffledPosts.slice(0, postsPerLoad);

    postsToAdd.forEach((post, index) => {
        displayedPosts.add(post.url);
        container.innerHTML += createBlogCard(post, index);
    });

    if (displayedPosts.size === blogPosts.length) {
        document.getElementById('loadMoreBtn').style.display = 'none';
    }
}

// Initial load
document.addEventListener('DOMContentLoaded', loadMorePosts);

// Add styles for disabled links
const styleSheet = document.createElement('style');
styleSheet.textContent = `
    .custom-card-link.disabled {
        opacity: 0.6;
        cursor: not-allowed;
        background: linear-gradient(90deg, #6c757d, #495057);
        pointer-events: none;
    }
`;
document.head.appendChild(styleSheet); 