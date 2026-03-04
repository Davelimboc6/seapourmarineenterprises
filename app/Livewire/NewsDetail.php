<?php

namespace App\Livewire;

use Livewire\Component;

class NewsDetail extends Component
{
    public $slug;
    public $news = null;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->news = $this->getNewsBySlug($slug);
    }

    private function getNewsBySlug($slug)
    {
        $newsItems = [
            // 1. MTKR Jason Bradley
            [
                'slug' => 'mtkr-jason-bradley-oil-leak-incident-shakes-mariveles-bataan-immediate-response-initiated',
                'title' => 'MTKR Jason Bradley Oil Leak Incident Shakes Mariveles, Bataan: Immediate Response Initiated',
                'date' => 'July 29, 2024',
                'image' => '/images/news/pcg_respond.png', // Add your image here
                'content' => "The MTKR Jason Bradley incident occurred off the coast of Mariveles, Bataan, where the vessel sank and released diesel fuel into the sea. Initial reports from the shipping company claimed no cargo fuel was onboard, but the Philippine Coast Guard (PCG) divers discovered an unknown amount of diesel on the vessel. The PCG has since sealed the leaks and is preparing for salvage operations to properly remove the diesel cargo and mitigate environmental impact​​.",
                'external_links' => [
                    ['url' => 'https://www.facebook.com/coastguardph/videos/1489974468279872', 'label' => 'PCG Video'],
                    ['url' => 'https://r.search.yahoo.com/_ylt=AwrO7mVTsoBpa0ERyt5XNyoA;_ylu=Y29sbwNncTEEcG9zAzMEdnRpZAMEc2VjA3Ny/RV=2/RE=1771251539/RO=10/RU=https%3a%2f%2fwww.gmanetwork.com%2fnews%2ftopstories%2fregions%2f915590%2fmariveles-residents-endure-foul-smell-from-oil-spill-caused-by-sunken-tanker%2fstory%2f/RK=2/RS=q5HBObifIyZW1BP.FU_KdY8jcE4-', 'label' => 'GMA News']
                ]
            ],
            // 2. MT Terranova
           [
           'slug' => 'mt-terranova-bataan-oil-spill-current-status-sea-pour-marine-enterprises-role',
           'title' => 'MT Terranova Bataan Oil Spill: Current Status and Sea Pour Marine Enterprises\' Role in Containment Efforts',
           'date' => 'August 2024',
           'image' => '/images/news/terranova.jpg',
           'content' => "The recent oil spill from the MT Terranova off the coast of Bataan has raised significant environmental concerns, affecting marine life and local communities. The spill, which began earlier this month, has necessitated immediate and comprehensive action to prevent extensive damage to the ecosystem.

           Current Status:
           Efforts to contain and clean up the spill are ongoing. Local authorities, environmental agencies, and various stakeholders have come together to address this urgent situation. The affected area has been cordoned off, and continuous monitoring is in place to assess the spread and impact of the oil.

           Sea Pour Marine Enterprises’ Role:
           Sea Pour Marine Enterprises has been instrumental in the containment efforts, providing high-quality oil spill booms and expert teams working around the clock.",
           'external_links' => [
        ['url' => 'https://r.search.yahoo.com/_ylt=AwrO8z1K.n1pOyMHY.5XNyoA;_ylu=Y29sbwNncTEEcG9zAzEEdnRpZAMEc2VjA3Ny/RV=2/RE=1771073355/RO=10/RU=https%3a%2f%2fwww.esquiremag.ph%2fpolitics%2fnews%2fmanila-bay-oil-spill-terra-nova-a833-20240725-lfrm/RK=2/RS=k2ELTFAsfTOvT8vlkJAzJcES4tw-', 'label' => 'esquiremag.ph']
    ]
],

           // 3. MT Princess Empress
[
    'slug' => 'turning-the-tide-sea-pour-marine-enterprises-mt-princess-empress-oil-spill',
    'title' => 'Turning the Tide: Sea Pour Marine Enterprises and the MT Princess Empress Oil Spill',
    'date' => '2023',
    'image' => '/images/news/mt-princess-empress.jpg',
    'content' => <<<HTML
<p class="mb-8 leading-relaxed">In the serene waters off the coast, where the azure waves dance under the golden sun, a major environmental incident occurred. The MT Princess Empress, a vessel that had long operated within these waters, encountered a maritime accident that resulted in a significant oil spill. Dark and hazardous oil spread across the sea, threatening marine ecosystems and the livelihoods of countless coastal communities.</p>

<h2 class="mt-12 mb-6 text-xl font-semibold text-slate-900">The Crisis Unfolds</h2>
<p class="mb-8 leading-relaxed">The impact of the spill was immediate and devastating. Beaches that were once pristine became contaminated with thick layers of oil. Fishermen, whose families had relied on these waters for generations, found their nets filled with oil instead of fish. Local wildlife, from microscopic organisms to larger marine species, faced severe ecological threats.</p>

<h2 class="mt-12 mb-6 text-xl font-semibold text-slate-900">Enter Sea Pour Marine Enterprises</h2>
<p class="mb-8 leading-relaxed">Amid this environmental crisis, Sea Pour Marine Enterprises emerged as a leading force in response and recovery. Recognized for its commitment to marine safety and environmental protection, the company immediately mobilized its specialized response teams. Experts in marine biology, environmental science, and maritime engineering were deployed with a clear mission: to contain the spill, reduce environmental damage, and support long-term ecosystem recovery.</p>

<h2 class="mt-8 mb-4 text-xl font-semibold text-slate-900">The Strategy: Precision and Passion</h2>
<p class="mb-4 leading-relaxed">Sea Pour Marine Enterprises implemented a comprehensive and coordinated response strategy.</p>

<ul class="mb-12 space-y-2 text-slate-700">
    <li class="pl-6 py-1.5 border-l-4 border-cyan-400 bg-slate-50/50">
        <strong class="block font-bold text-slate-900 mb-1">1. Rapid Response Units:</strong>
        Specialized oil spill response vessels equipped with advanced skimming and containment technology were deployed to prevent further spread and recover contaminated material. Operations continued around the clock to ensure maximum effectiveness.
    </li>
    <li class="pl-6 py-1.5 border-l-4 border-cyan-400 bg-slate-50/50">
        <strong class="block font-bold text-slate-900 mb-1">2. Environmental Assessment:</strong>
        Scientific teams conducted detailed evaluations of affected marine zones, identifying vulnerable habitats and monitoring the condition of marine species to guide restoration efforts.
    </li>
    <li class="pl-6 py-1.5 border-l-4 border-cyan-400 bg-slate-50/50">
        <strong class="block font-bold text-slate-900 mb-1">3. Community Engagement:</strong>
        The company worked directly with coastal communities by providing logistical support, environmental guidance, and safety measures to help mitigate economic and social impacts.
    </li>
    <li class="pl-6 py-1.5 border-l-4 border-cyan-400 bg-slate-50/50">
        <strong class="block font-bold text-slate-900 mb-1">4. Restoration Initiatives:</strong>
        Beyond immediate cleanup, long-term rehabilitation projects were initiated, including mangrove reforestation and the installation of artificial reef systems to restore biodiversity and ecological balance.
    </li>
</ul>

<h2 class="mt-12 mb-6 text-xl font-semibold text-slate-900">The Heart of Our Efforts</h2>
<p class="mb-8 leading-relaxed">What distinguishes Sea Pour Marine Enterprises is its unwavering dedication to responsible environmental stewardship. Every operation was executed with precision, accountability, and respect for marine life. Each decision reflected the company's commitment to protecting ocean ecosystems while maintaining the highest professional standards.</p>

<h2 class="mt-12 mb-6 text-xl font-semibold text-slate-900">Looking Forward</h2>
<p class="mb-8 leading-relaxed">Although recovery will take time, sustained collaboration and scientific intervention provide strong confidence in the restoration of affected areas. The MT Princess Empress incident serves as a critical reminder of the importance of preparedness, environmental responsibility, and continuous improvement in maritime operations.</p>

<h2 class="mt-12 mb-6 text-xl font-semibold text-slate-900">A Message of Gratitude</h2>
<p class="mb-8 leading-relaxed">Sea Pour Marine Enterprises extends sincere appreciation to the local communities, partner organizations, and volunteers who contributed to the response efforts. Their cooperation and resilience played a vital role in the success of the recovery mission.</p>

<p class="text-lg font-semibold text-slate-800 border-t border-slate-200 pt-6 mt-8">In the face of adversity, Sea Pour Marine Enterprises continues to lead initiatives that promote environmental protection, marine safety, and sustainable development. The company remains committed to shaping a cleaner, safer, and more resilient future for the world's oceans.</p>

HTML,
    'external_links' => [
        ['url' => 'https://r.search.yahoo.com/_ylt=AwrjdHkhqHxpNIsC0bNXNyoA;_ylu=Y29sbwNncTEEcG9zAzIEdnRpZAMEc2VjA3Ny/RV=2/RE=1770986785/RO=10/RU=https%3a%2f%2fnewsinfo.inquirer.net%2f1972798%2fmarina-exec-dismissed-over-mtkr-princess-empress-oil-spill/RK=2/RS=YpaDg296GQcy4SEjgA58Ol5MGok-', 'label' => 'Inquirer News']
    ]
],

            // 4. Guimaras Oil Spill
[
    'slug' => 'responding-to-crisis-sea-pour-marine-enterprises-aiding-guimaras-oil-spill-clean-up',
    'title' => 'Responding to Crisis: How Sea Pour Marine Enterprises is Aiding in the Guimaras Oil Spill Clean-Up',
    'date' => 'August 11, 2006',
    'image' => '/images/news/guimaras-oil-spill.webp',
    'content' => "
<p class='mb-6'>On August 11, 2006, the beautiful island province of Guimaras in the Philippines experienced a devastating environmental disaster when an oil tanker, <strong>MT Solar 1</strong>, sank off its coast. The incident resulted in the spillage of approximately 500,000 liters of bunker fuel into the sea, causing extensive damage to the marine ecosystem, local fisheries, and communities relying on these waters.</p>

<p class='mb-6'><strong>The Environmental and Economic Impact</strong></p>
<p class='mb-6'>The Guimaras oil spill is considered one of the worst environmental disasters in Philippine history. The spill contaminated vast stretches of coastline, smothering coral reefs, mangroves, and seagrass beds in thick, toxic oil. The immediate aftermath saw an outpouring of dead fish, shellfish, and other marine life, crippling the local fishing industry and tourism sector. The livelihoods of thousands of residents were severely impacted, and the once-pristine beaches of Guimaras became polluted and uninhabitable for marine life.</p>

<p class='mb-6'>The spill contaminated vast stretches of coastline, smothering coral reefs, mangroves, and seagrass beds in thick, toxic oil.</p>

<p class='mb-6'><strong>Sea Pour Marine Enterprises Steps In</strong></p>
<p class='mb-6'>In times of crisis, organizations must step up and contribute their expertise and resources to aid in recovery efforts. <strong>Sea Pour Marine Enterprises</strong>, a leading provider of marine safety products, equipment, and services, has been integral to clean-up and rehabilitation efforts.</p>

<p class='mb-6'><strong>Expertise and Equipment</strong></p>
<p class='mb-6'>Sea Pour Marine Enterprises brought their extensive knowledge and advanced equipment to the front lines of the clean-up operation. Their team of certified experts quickly mobilized to assess the situation and implement effective strategies to contain and mitigate the spread of oil. Utilizing specialized oil spill response equipment, such as booms and skimmers, they worked tirelessly to prevent further contamination and start the arduous process of cleaning the affected areas.</p>

<p class='mb-6'><strong>Collaboration and Training</strong></p>
<p class='mb-6'>Understanding that successful recovery requires collective effort, Sea Pour Marine Enterprises partnered with local authorities, non-governmental organizations, and international environmental groups. Together, they organized training programs for local communities, equipping them with the skills and knowledge needed to assist in the clean-up and prevent future spills. This collaborative approach ensured a more efficient and sustained response, empowering the people of Guimaras to protect their environment.</p>

<p class='mb-6'><strong>Commitment to Long-Term Recovery</strong></p>
<p class='mb-6'>Sea Pour Marine Enterprises' involvement didn't end with the immediate response. Recognizing the importance of long-term rehabilitation, they have continued to support initiatives aimed at restoring Guimaras' marine ecosystem. From replanting mangroves to monitoring coral reef health, their ongoing efforts reflect a deep commitment to helping the island recover and thrive once more.</p>

<p class='mb-6'><strong>Moving Forward</strong></p>
<p class='mb-6'>The Guimaras oil spill is a stark reminder of the vulnerability of our natural environments and the need for vigilance and preparedness. Sea Pour Marine Enterprises remains dedicated to their mission of ensuring marine safety and environmental protection. Their proactive and compassionate response to the Guimaras disaster exemplifies the positive impact that businesses can have in times of need.</p>

<p class='mb-6'>As the clean-up and rehabilitation efforts continue, the resilience of the Guimaras community, supported by organizations like Sea Pour Marine Enterprises, offers hope for a restored and vibrant marine environment. Through sustained collaboration and unwavering commitment, we can work towards a future where our oceans and coastal communities are safeguarded against such catastrophic events.</p>
",
    'external_links' => [        
        ['url' => 'https://r.search.yahoo.com/_ylt=Awrg4dPv.n1pMcAGFKhXNyoA;_ylu=Y29sbwNncTEEcG9zAzIEdnRpZAMEc2VjA3Ny/RV=2/RE=1771073519/RO=10/RU=https%3a%2f%2fnews.mongabay.com%2f2019%2f10%2fsaving-an-island-from-the-worst-oil-spill-in-the-philippines-the-case-of-guimaras%2f/RK=2/RS=znJTHX6ix3gw0yScQPupFcwD.Z0-', 'label' => 'news.mongabay.com ']
]
],


           // 5. Oil Siltation Booms
[
    'slug' => 'essential-guide-oil-siltation-booms-protecting-waterways',
    'title' => 'The Essential Guide to Oil Siltation Booms: Protecting Our Waterways',
    'date' => '2024',
    'image' => '/images/siltation-boom.png',
    'content' => "
<p class='mb-6'>Water pollution remains one of the most pressing environmental issues of our time. Among the many threats to our waterways, oil spills and sedimentation from construction and dredging activities stand out due to their immediate and long-term impacts on aquatic ecosystems. Enter the oil siltation boom—a critical tool in the fight against water pollution. This blog explores what oil siltation booms are, how they work, and why they are indispensable in safeguarding our water resources.</p>

<p class='mb-6'><strong>What is an Oil Siltation Boom?</strong></p>
<p class='mb-6'>An oil siltation boom is a floating barrier designed to contain and control the spread of oil and sediments in water bodies. These booms are essential for responding to oil spills, preventing contamination, and managing sediment displacement during dredging or construction activities.</p>

<p class='mb-6'><strong>How Do Oil Siltation Booms Work?</strong></p>
<p class='mb-6'>Oil siltation booms operate on a simple yet effective principle: containment. They are typically made of durable, flexible materials like PVC or urethane and consist of three main components:</p>
<ul class='mb-6 list-disc list-inside'>
    <li><strong>Floatation Device:</strong> Keeps the boom buoyant on the water's surface.</li>
    <li><strong>Skirt:</strong> Extends below the surface to contain and control the spread of oil and sediments.</li>
    <li><strong>Ballast Chain:</strong> Ensures the boom remains stable and in place, even in turbulent conditions.</li>
</ul>
<p class='mb-6'>When deployed, these booms create a physical barrier that traps oil slicks and sediment within a confined area, allowing for easier collection and removal.</p>

<p class='mb-6'><strong>Applications of Oil Siltation Booms</strong></p>
<ul class='mb-6 list-disc list-inside'>
    <li><strong>Oil Spill Response:</strong> In the event of an oil spill, quick deployment of oil siltation booms is crucial. They prevent the oil from spreading, minimizing environmental damage and facilitating cleanup efforts.</li>
    <li><strong>Dredging and Construction:</strong> During dredging or construction activities near water bodies, siltation booms help contain displaced sediments, preventing them from clouding the water and harming aquatic life.</li>
    <li><strong>Maritime Industry:</strong> Ports and harbors use siltation booms to manage routine spills and sediment displacement from ship traffic and maintenance activities.</li>
    <li><strong>Environmental Protection:</strong> Conservation projects often employ siltation booms to protect sensitive habitats, such as coral reefs and wetlands, from pollution.</li>
</ul>

<p class='mb-6'><strong>Benefits of Using Oil Siltation Booms</strong></p>
<ul class='mb-6 list-disc list-inside'>
    <li><strong>Environmental Protection:</strong> By containing oil spills and sediments, these booms protect marine life, water quality, and shoreline ecosystems.</li>
    <li><strong>Regulatory Compliance:</strong> Many regions require the use of siltation booms to comply with environmental regulations and standards.</li>
    <li><strong>Cost-Effective:</strong> Preventing the spread of pollutants reduces cleanup costs and mitigates long-term environmental damage.</li>
    <li><strong>Versatility:</strong> Suitable for a wide range of water bodies, from small ponds to large coastal areas.</li>
</ul>

<p class='mb-6'><strong>Innovations in Oil Siltation Boom Technology</strong></p>
<p class='mb-6'>The effectiveness of oil siltation booms continues to improve with advancements in technology. Innovations include:</p>
<ul class='mb-6 list-disc list-inside'>
    <li><strong>Eco-Friendly Materials:</strong> Development of biodegradable and non-toxic materials to reduce environmental impact.</li>
    <li><strong>Smart Booms:</strong> Integration of sensors and IoT technology to monitor conditions and optimize deployment.</li>
    <li><strong>Improved Design:</strong> Enhanced durability and stability to withstand harsh weather and water conditions.</li>
</ul>

<p class='mb-6'>Oil siltation booms play a pivotal role in protecting our water resources from the harmful effects of oil spills and sedimentation. As environmental challenges grow, the importance of these containment tools cannot be overstated. By investing in and utilizing oil siltation booms, we take a significant step towards preserving the health and beauty of our waterways for future generations.</p>
",
    'external_links' => []
],

          // 6. HDPE Dredging Pipes
[
    'slug' => 'journey-hdpe-dredging-pipes-stories-field',
    'title' => 'The Journey of HDPE Dredging Pipes: Stories from the Field',
    'date' => '2024',
    'image' => '/images/HDPE.avif',
    'content' => "
<p class='mb-6'>High-Density Polyethylene (HDPE) pipes have revolutionized the dredging industry. Known for their durability, flexibility, and resilience, these pipes have been pivotal in numerous successful dredging projects around the globe. Today, we dive into some true stories that highlight the incredible impact of HDPE dredging pipes in various challenging environments.</p>

<p class='mb-6'><strong>Story 1: Rescuing a Coastal Town in the Netherlands</strong></p>
<p class='mb-6'>In 2016, a coastal town in the Netherlands faced severe erosion, threatening its existence. The solution involved an extensive beach nourishment project, requiring a robust pipeline system to transport sand from the seabed to the shore. HDPE dredging pipes were chosen for their ability to withstand harsh marine conditions.</p>
<p class='mb-6'><strong>The Challenge:</strong> The project faced numerous challenges, including rough seas, strong currents, and the need for a non-intrusive solution that wouldn’t disturb marine life.</p>
<p class='mb-6'><strong>The Solution:</strong> HDPE pipes, with their flexibility and strength, proved to be the perfect choice. They were easily connected and laid out along the seabed, resistant to the corrosive effects of saltwater. Over the course of several months, these pipes transported millions of cubic meters of sand, restoring the beach and safeguarding the town from further erosion.</p>
<p class='mb-6'><strong>The Outcome:</strong> Today, the town enjoys a robust shoreline, and the success of the project has been a case study for similar initiatives worldwide.</p>

<p class='mb-6'><strong>Story 2: The Amazon River Basin Project</strong></p>
<p class='mb-6'>In the heart of the Amazon rainforest, a major dredging project was initiated to improve navigability and prevent flooding. The project faced the dual challenge of dense vegetation and extreme weather conditions.</p>
<p class='mb-6'><strong>The Challenge:</strong> Transporting materials through the remote and dense Amazon rainforest required a pipeline that was both flexible and lightweight. The pipes also needed to withstand the harsh environmental conditions of the tropics.</p>
<p class='mb-6'><strong>The Solution:</strong> HDPE dredging pipes were selected for their unique properties. Lightweight and flexible, they were easily transported and installed in the challenging terrain. Their resilience to UV radiation and high temperatures ensured that they remained functional throughout the project.</p>
<p class='mb-6'><strong>The Outcome:</strong> The successful completion of the project improved river navigation, reduced flooding, and had a minimal environmental footprint, thanks to the environmentally friendly nature of HDPE.</p>

<p class='mb-6'><strong>Story 3: Rehabilitating the Port of Durban</strong></p>
<p class='mb-6'>The Port of Durban, one of Africa’s busiest ports, required extensive dredging to maintain its operational depth. The challenge was to find a durable and efficient solution that could handle the large volumes of silt and debris.</p>
<p class='mb-6'><strong>The Challenge:</strong> The port’s high traffic and constant activity meant that the dredging operations had to be quick and efficient, with minimal disruption.</p>
<p class='mb-6'><strong>The Solution:</strong> HDPE dredging pipes were used due to their high abrasion resistance and ease of handling. Their ability to be quickly assembled and disassembled allowed for swift operations, ensuring the port remained functional throughout the dredging process.</p>
<p class='mb-6'><strong>The Outcome:</strong> The port was successfully dredged, maintaining its status as a key logistical hub. The use of HDPE pipes ensured the project was completed on time and within budget.</p>

<p class='mb-6'>These stories from the field highlight the versatility and reliability of HDPE dredging pipes in various challenging environments. Whether it's protecting coastal towns, navigating dense rainforests, or maintaining bustling ports, HDPE pipes have proven to be an indispensable tool in modern dredging projects.</p>
",
    'external_links' => [
    ]
],

// 7. PE Pipe Floaters
[
    'slug' => 'exploring-versatility-benefits-pe-pipe-floaters',
    'title' => 'Exploring the Versatility and Benefits of PE Pipe Floaters',
    'date' => '2024',
    'image' => '/images/pe-pipe-floater.png',
    'content' => "
<p class='mb-6'>In the dynamic world of marine and offshore industries, the efficient and secure handling of pipes is paramount. One innovation that has revolutionized this aspect is the PE (Polyethylene) pipe floater. PE pipe floaters are indispensable in various applications, from dredging and mining to aquaculture and oil and gas industries.</p>

<p class='mb-6'><strong>What are PE Pipe Floaters?</strong></p>
<p class='mb-6'>PE pipe floaters are buoyant devices made from high-density polyethylene (HDPE) or other types of polyethylene. These floaters are designed to provide buoyancy to pipelines, allowing them to float on water surfaces or remain at a desired depth underwater. The floaters are typically clamped around the pipes and can be customized to fit various pipe diameters and buoyancy requirements.</p>

<p class='mb-6'><strong>Key Benefits of PE Pipe Floaters</strong></p>
<ul class='mb-6 list-disc list-inside'>
<li><strong>Durability and Longevity:</strong> Corrosion Resistance: Unlike metal floaters, PE floaters are resistant to corrosion, making them ideal for use in harsh marine environments. UV Resistance: PE floaters are designed to withstand prolonged exposure to sunlight without degrading, ensuring long-term performance.</li>
<li><strong>Lightweight and Easy to Install:</strong> Ease of Handling: PE floaters are lightweight compared to traditional metal floaters, making them easier to transport and install. Modular Design: The modular design of PE floaters allows for quick assembly and disassembly, reducing downtime during installation and maintenance.</li>
<li><strong>Cost-Effectiveness:</strong> Lower Maintenance Costs: The durability of PE floaters translates to lower maintenance costs over their lifespan. Reduced Operational Costs: The buoyancy provided by PE floaters can enhance operational efficiency, leading to cost savings.</li>
<li><strong>Environmental Friendliness:</strong> Non-Toxic Material: PE floaters are made from non-toxic materials, minimizing environmental impact. Recyclable: At the end of their lifecycle, PE floaters can be recycled, contributing to sustainable practices.</li>
</ul>

<p class='mb-6'><strong>Applications of PE Pipe Floaters</strong></p>
<ul class='mb-6 list-disc list-inside'>
<li><strong>Dredging:</strong> Pipeline Support: In dredging operations, PE floaters support the pipelines that transport dredged materials from the seabed to the shore or dumping sites. Enhanced Efficiency: The buoyancy provided by the floaters ensures that the pipelines remain at the desired position, improving the efficiency of dredging operations.</li>
<li><strong>Mining:</strong> Slurry Transport: PE floaters are used in mining operations to support pipelines that transport slurry (a mixture of water and fine particles) from mining sites to processing plants.</li>
<li><strong>Aquaculture:</strong> Fish Farming: In aquaculture, PE floaters support pipelines that deliver water, feed, and oxygen to fish farming cages or tanks. Stability and Safety: The floaters ensure the stability and safety of the pipelines, critical for maintaining optimal farming conditions.</li>
<li><strong>Oil and Gas:</strong> Offshore Operations: PE floaters are used to support flexible pipelines that transport oil and gas from offshore platforms to onshore facilities. Subsea Applications: The floaters can also be used in subsea applications to maintain the position of pipelines at specific depths.</li>
<li><strong>Water Supply and Sewage Systems:</strong> Floating Pipelines: PE floaters are employed in water supply and sewage systems to create floating pipelines that can be easily accessed for maintenance and inspection.</li>
</ul>

<p class='mb-6'>PE pipe floaters are a versatile and essential component in various marine and offshore applications. Their durability, ease of installation, cost-effectiveness, and environmental friendliness make them an attractive choice for industries that rely on the secure and efficient handling of pipelines.</p>
",
    'external_links' => []
],

// 8. Fire Extinguishers
[
    'slug' => 'fire-extinguishers-essential-guide-fire-safety',
    'title' => 'Fire Extinguishers: Your Essential Guide to Fire Safety',
    'date' => '2024',
    'image' => '/images/news/fire-extinguishers.png',
    'content' => "
<p class='mb-6'>Fire safety is extremely important in homes and workplaces, and the fire extinguisher is a crucial tool for preventing and handling fires. This small device can make a big difference, turning a small accident into a major disaster.</p>

<p class='mb-6'><strong>Types of Fire Extinguishers</strong></p>
<p class='mb-6'><strong>1. Water (Class A) Extinguishers:</strong> Effective against fires involving paper, wood, textiles, and other solid combustibles. Not for: Flammable liquids or electrical fires.</p>
<p class='mb-6'><strong>2. Foam (Class A and B) Extinguishers:</strong> Suitable for fires involving flammable liquids like petrol or paint, and solid combustibles. Not for: Electrical fires.</p>
<p class='mb-6'><strong>3. Dry Powder (Class A, B, and C) Extinguishers:</strong> Versatile and effective against most types of fires including flammable gases. Not for: Enclosed spaces, as they can cause respiratory issues.</p>
<p class='mb-6'><strong>4. CO2 (Class B and Electrical) Extinguishers:</strong> Ideal for electrical fires and flammable liquids. Not for: Solid combustibles like wood or paper.</p>
<p class='mb-6'><strong>5. Wet Chemical (Class F) Extinguishers:</strong> Specifically designed for kitchen fires involving cooking oils and fats. Not for: Electrical fires or flammable liquids.</p>

<p class='mb-6'><strong>How to Use a Fire Extinguisher (PASS)</strong></p>
<p class='mb-6'>1. Pull the pin.<br>2. Aim low at the base of the fire.<br>3. Squeeze the lever.<br>4. Sweep from side to side.</p>

<p class='mb-6'>Regular maintenance—monthly checks, annual professional inspection, and periodic hydrostatic testing—is essential to ensure extinguishers function when needed. Choosing the right extinguisher depends on the fire risks in each area: ABC for general home use, wet chemical for kitchens, dry powder for garages, and CO2 for offices with electrical equipment.</p>
",
    'external_links' => []
],

// 9. Oil Spill Boom (Unsung Hero)
[
    'slug' => 'unsung-hero-environmental-disasters-oil-spill-boom',
    'title' => 'The Unsung Hero of Environmental Disasters: The Oil Spill Boom',
    'date' => '2024',
    'image' => '/images/news/oil-spill-boom.png',
    'content' => "
<p class='mb-6'>Oil spills are catastrophic events that wreak havoc on marine life, coastal ecosystems, and human communities. When these disasters strike, the response must be swift and effective to minimize damage. One of the key tools in this battle against oil spills is the oil spill boom, an unsung hero that plays a crucial role in containing and controlling these environmental emergencies.</p>

<p class='mb-6'><strong>What is an Oil Spill Boom?</strong></p>
<p class='mb-6'>An oil spill boom is a floating barrier designed to contain and control the spread of oil on the water's surface. Booms are essential for oil spill response because they prevent the oil from reaching shorelines, where it can cause extensive environmental and economic damage.</p>

<p class='mb-6'><strong>Types of Oil Spill Booms</strong></p>
<ul class='mb-6 list-disc list-inside'>
<li><strong>Containment Booms:</strong> Primary tool for containing oil spills, with high freeboard and skirt for open water, harbors, and nearshore use.</li>
<li><strong>Sorbent Booms:</strong> Made of absorbent materials like polypropylene, used for smaller spills and final cleanup.</li>
<li><strong>Fire Booms:</strong> Heat-resistant booms used to contain and burn oil on the water's surface in controlled burns.</li>
<li><strong>Inflatable Booms:</strong> Easy to deploy and store; ideal for rapid response scenarios.</li>
</ul>

<p class='mb-6'><strong>Why Oil Spill Booms Matter</strong></p>
<p class='mb-6'>They protect sensitive coastal areas and marine habitats by containing and controlling the spread of oil, reduce economic damage to fisheries and tourism, and make response operations more efficient by concentrating the spill into manageable zones.</p>

<p class='mb-6'><strong>Real-Life Success Stories</strong></p>
<p class='mb-6'>During the Deepwater Horizon spill in 2010 and the Exxon Valdez spill in 1989, extensive boom deployment helped reduce further spread of oil and shield parts of the coastline from even greater damage.</p>

<p class='mb-6'>As technology advances, innovations such as smart booms with sensors, biodegradable materials, and more durable designs continue to improve spill response capabilities. Oil spill booms remain a first line of defense in protecting our oceans and coasts from the devastating effects of oil spills.</p>
",
    'external_links' => [
      
    ]
],
        ];

        foreach ($newsItems as $item) {
            if ($item['slug'] === $slug) {
                return $item;
            }
        }

        abort(404);
    }
   public function render()
{
    return view('livewire.news-detail', [
        'news' => $this->news,
    ])->layout('layouts.app', [
        'title' => $this->news['title'] ?? 'News Detail'
    ]);
}
}
