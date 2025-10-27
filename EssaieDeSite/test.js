

        // Gouttes de sang plus sombres
        function createBloodDrip() {
            const drip = document.createElement('div');
            drip.className = 'blood-drip';
            drip.style.left = Math.random() * 100 + '%';
            drip.style.animationDelay = Math.random() * 4 + 's';
            drip.style.animationDuration = (3 + Math.random() * 2) + 's';
            document.body.appendChild(drip);
            
            setTimeout(() => drip.remove(), 5000);
        }
        
        setInterval(createBloodDrip, 1200);
        
        // Effet de tremblement horrifique
        document.querySelectorAll('.location').forEach(loc => {
            loc.addEventListener('mouseenter', function() {
                this.style.animation = 'horrorShake 0.4s';
            });
            loc.addEventListener('animationend', function() {
                this.style.animation = '';
            });
        });
        
        // Effet de glitch aléatoire sur le texte
        setInterval(() => {
            const locations = document.querySelectorAll('.location span');
            const random = locations[Math.floor(Math.random() * locations.length)];
            random.style.animation = 'textGlitch 0.2s';
            setTimeout(() => {
                random.style.animation = '';
            }, 200);
        }, 3000);
        
        const style = document.createElement('style');
        style.textContent = `
            @keyframes horrorShake {
                0%, 100% { transform: translate(0, 0) scale(1.03); }
                10% { transform: translate(-3px, 3px) scale(1.03) rotate(0.5deg); }
                20% { transform: translate(3px, -3px) scale(1.03) rotate(-0.5deg); }
                30% { transform: translate(-3px, -3px) scale(1.03) rotate(0.5deg); }
                40% { transform: translate(3px, 3px) scale(1.03) rotate(-0.5deg); }
                50% { transform: translate(-2px, 2px) scale(1.03) rotate(0.3deg); }
                60% { transform: translate(2px, -2px) scale(1.03) rotate(-0.3deg); }
                70% { transform: translate(-1px, 1px) scale(1.03) rotate(0.2deg); }
                80% { transform: translate(1px, -1px) scale(1.03) rotate(-0.2deg); }
            }
            
            @keyframes textGlitch {
                0%, 100% { transform: translate(0); opacity: 1; }
                20% { transform: translate(-2px, 2px); opacity: 0.8; }
                40% { transform: translate(2px, -2px); opacity: 0.6; }
                60% { transform: translate(-1px, -1px); opacity: 0.9; }
                80% { transform: translate(1px, 1px); opacity: 0.7; }
            }
        `;
        document.head.appendChild(style);
        
        // Flash sombre aléatoire
        setInterval(() => {
            if (Math.random() > 0.7) {
                document.body.style.filter = 'brightness(0.3)';
                setTimeout(() => {
                    document.body.style.filter = 'brightness(1)';
                }, 50);
            }
        }, 5000);
