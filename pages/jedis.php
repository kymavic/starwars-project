<?php
session_start();
/*
if($_SESSION['user'] == null){
    header("Location: login.php");
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start Wars</title>
  <!--Header-->
  <?php include('./sections/libraries.php'); ?>
</head>

<body>
  <!--Header-->
  <?php include('./sections/header.php'); ?>
  <!--main Content-->
  <main>
    <article>
      <!--#JEDI DETAIL-->
      <section class="default-detail">
        <div class="section-container">
          <h2 class="h2 section-title">Jedis</h2>
          <div>
            <p class="detail-subtitle">Yoda</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Yoda">
            </figure>
            <p class="storyline">Yoda was a wise, experienced, and powerful Grand Master of the Jedi of an unknown species and the oldest known prophet in existence (having lived at least 900 years), considered the wisest and most powerful Jedi Master within the Star Wars universe.</p>
          </div>

          <div>
            <p class="detail-subtitle">Mace Windu</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Mace Windu">
            </figure>
            <p class="storyline">Mace Windu was a human Jedi Master of the Order and one of the last members of the Order's upper echelons before the fall of the Galactic Republic.</p>
          </div>

          <div>
            <p class="detail-subtitle">Plo Koon</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Plo Koon">
            </figure>
            <p class="storyline">Plo Koon was a Kel Dor Jedi Master who served as a General during the Clone Wars and a member of the Jedi Council. Koon led the 442nd Siege Battalion in the Battle of Cato Neimoidia, in which he was shot down by his own troops upon the occurrence of Order 66.</p>
          </div>

          <div>
            <p class="detail-subtitle">Kit Fisto</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Kit Fisto">
            </figure>
            <p class="storyline">Kit Fisto was a Nautolan Jedi Master, who served as a member of the Jedi Order during the Clone Wars. During the attempted arrest of Chancellor Palpatine, Fisto was killed by the Sith Lord in a duel, leaving Mace Windu to face the Chancellor alone.</p>
          </div>

          <div>
            <p class="detail-subtitle">Count Dooku</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Count Dooku">
            </figure>
            <p class="storyline">Count Dooku was a human Jedi Master who was trained by Yoda and mentored Qui-Gon Jinn, and one of the main antagonists of the prequel trilogy.</p>
          </div>

          <div>
            <p class="detail-subtitle">Qui-Gon Jinn</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Qui-Gon Jinn">
            </figure>
            <p class="storyline">Qui-Gon Jinn was a wise and powerful human Jedi Master, who was trained by Count Dooku and mentored Obi-Wan Kenobi. Unlike other, more conservative Jedi, he valued living in the moment as the best way to embrace the Force. While other Jedi respected him highly, they were frequently puzzled by his unorthodox beliefs and ultimately denied him a seat on the Jedi Council, despite him being among the wisest and most powerful of the Jedi. Jinn was both the Jedi to discover the Sith's return after more than a millennium, upon being attacked by Darth Maul during a mission to protect Queen Padmé Amidala of Naboo, and the one to find the ability to become a Force spirit after death, though he wasn't capable of having a physical body. Following his death at Darth Maul's hands, Jinn guided both Yoda and Obi-Wan to the ability to become a physical Force spirit after death. Within the Disney+ TV series, Obi-Wan Kenobi, Qui-Gon Jinn appears as a force spirit following Darth Vader's defeat to Obi-Wan Kenobi in a duel. He communes with Kenobi before returning to the Force. In Star Wars: Episode IX - The Rise of Skywalker, he appears as a disembodied voice alongside other past Jedi, empowering Rey to face a rejuvenated Darth Sidious.</p>
          </div>

          <div>
            <p class="detail-subtitle">Obi-Wan Kenobi</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Obi-Wan Kenobi">
            </figure>
            <p class="storyline">Obi-Wan Kenobi was a human Jedi Master who trained Anakin Skywalker, at the behest of his deceased master Qui-Gon Jinn, and later Anakin's son Luke Skywalker, making him one of the main characters in the Star Wars franchise. Having fought in the Clone Wars, Obi-Wan proved himself an adept strategist, duelist, and spy, as his leadership style heavily favours subterfuge and misdirection while commanding clone troopers, or wielding the Force. Due to his charisma and persuasion skills, he became known as 'The Negotiator' during the Clone Wars. Obi-Wan best exemplifies the Jedi Code: in spite of Darth Vader's betrayal, his master (Qui-Gon Jinn) and the woman he loved being killed by his nemesis, Darth Maul, he never fell into darkness. As one of the few survivors of Order 66 following the Galactic Republic's transformation into the Galactic Empire, Obi-Wan hid on the desert planet Tatooine, watching over Anakin's son Luke, knowing that he would one day grow to become a Jedi and defeat Vader. In Obi-Wan Kenobi, while Obi-Wan hid on Tatooine, Senator Bail Organa's daughter, Leia Organa, was captured upon the request of the Third Sister. Obi-Wan was sent to rescue the ten-year old Princess, and, after retrieving Leia on the planet Daiyu, was forced to duel his former apprentice Darth Vader on the planet Mapuzo, before escaping. Leia Organa, who was imprisoned by the Third Sister on the planet Nur, is saved by Obi-Wan Kenobi a second time before the two escape to the planet Jabiim with aid from the Path. Vader and Kenobi duel once more following Obi-Wan's attempted escape from the planet and Kenobi defeats his former apprentice, allowing Leia to return to her parents. Following this event, Qui-Gon Jinn appears before Kenobi as a force spirit, after years of failed attempts by Obi-Wan to communicate with the deceased Jedi Master. Obi-Wan mentored Luke Skywalker in the Jedi arts, before meeting his demise at the hands of his former apprentice aboard the Death Star, though he continued guiding Luke as a Force spirit. In Star Wars: The Force Awakens, Obi-Wan's voice can briefly be heard just after Rey's force vision when she came into contact with Anakin's lightsaber. In Star Wars: Episode IX - The Rise of Skywalker, Obi-Wan appears as a disembodied voice alongside other past Jedi, empowering Rey to face a rejuvenated Darth Sidious.</p>
          </div>

          <div>
            <p class="detail-subtitle">Anakin Skywalker</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Anakin Skywalker">
            </figure>
            <p class="storyline">Anakin Skywalker was a human Jedi Knight, one of the main protagonists of the prequel trilogy, and the central antagonist of the original trilogy. He is the Chosen One, being born of the Force. He was apprenticed to Obi-Wan Kenobi and proved to be a very gifted duelist and Force user, being appointed to the Jedi High Council at the age of 22. He secretly married Padmé Amidala at the onset of the Clone Wars and has two children, Luke Skywalker and Leia Organa. He was eventually seduced to the dark side by the Sith Lord, Darth Sidious, and became the Sith Lord Darth Vader, serving the Galactic Empire. While he was a member of the Jedi Council, he trained a Padawan of his own, Ahsoka Tano during the Clone Wars. Vader was eventually redeemed by his son in Return of the Jedi and gave his own life to save Luke, killing Sidious and fulfilling the prophecy of the Chosen One. In Star Wars: Episode IX - The Rise of Skywalker, Anakin appears as a disembodied voice alongside other past Jedi, empowering Rey to face a rejuvenated Sidious.</p>
          </div>

          <div>
            <p class="detail-subtitle">Ahsoka Tano</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Ahsoka Tano">
            </figure>
            <p class="storyline">Ahsoka Tano was a Togruta Jedi Padawan discovered on her homeworld of Shili by Jedi Master Plo Koon. Plo brought her to Coruscant to train as a Jedi. She eventually became the Padawan learner of Anakin Skywalker during the Clone Wars. Among many campaigns, Ahsoka found herself advising rebels on the planet Onderon, including Steela and Saw Gerrera, in their fight against the Confederacy. These rebels would eventually form part of the basis of the Alliance for the Restoration of the Republic, a relationship that would later prove beneficial to her. She was accused of bombing the hangar at the Jedi Temple on Coruscant before clearing her name with Anakin's help. However, the Jedi Council's response during the ordeal soured her faith in the Order, and she left the Order to forge her own path in the galaxy. She briefly returned in the service of the Republic during the final days of the Clone Wars, when she led part of the 501st Clone Legion in the siege of Mandalore to capture the Sith Lord Darth Maul, who attempted to warn her that Anakin would soon fall to the dark side. Shortly after capturing Maul, Ahsoka was betrayed by her clone troopers as part of Order 66, but she managed to escape alongside Clone Captain Rex (whose control chip she removed). Years later, Ahsoka served the nascent Rebel Alliance as the spymaster and head of its intelligence network, directing operations behind the codename Fulcrum. After the Galactic Civil War, she began searching for Ezra Bridger and Grand Admiral Thrawn, who had gone missing in the Unknown Regions. Ahsoka is one of the few Jedi to survive past the Imperial era and into the New Republic era. In Star Wars: Episode IX - The Rise of Skywalker, Ahsoka appears as only a voice alongside other past Jedi, empowering Rey to face a rejuvenated Darth Sidious.</p>
          </div>

          <div>
            <p class="detail-subtitle">Cal Kestis</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Cal Kestis">
            </figure>
            <p class="storyline">Cal Kestis was a human Jedi Padawan and the main protagonist of Star Wars Jedi: Fallen Order. Trained by Jaro Tapal, Cal witnessed his master's death during Order 66, which he himself barely managed to survive. During the Imperial era, he lived on Bracca, working as a scrapyard rigger and hiding his Force powers. While scrapping a freighter, an accident forced Cal to reveal his Force abilities to save a co-worker, exposing him to the Empire, who dispatched two Inquisitors to hunt him down. On the run, Cal was rescued by Cere Junda, a Jedi Knight also in hiding, and worked with her and other allies to find a Jedi Holocron containing a list of Force-sensitive children, which could be used to rebuild the Jedi Order. Once their mission was completed, Cal decided to destroy the Holocron, believing it to be better for those children to discover their own destinies.</p>
          </div>

          <div>
            <p class="detail-subtitle">Kanan Jarrus</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Kanan Jarrus">
            </figure>
            <p class="storyline">Kanan Jarrus (born Caleb Dume) was a human Jedi Padawan who fought for the Rebellion during its formation. First introduced as a main character of the animated television series Star Wars Rebels, Jarrus was known to be the leader of a small rebel cell called the Spectres, operating on the planet Lothal. As a survivor of Order 66, Jarrus was forced to break certain Jedi traditions to avoid being detected by Imperial forces that continued their mission to eliminate any Jedi on sight, such as eschewing traditional Jedi robes or occasionally using a blaster, a weapon typically shunned by Jedi. Although he lost his master Depa Bilaba to Order 66 before he could ascend the ranks of the Jedi Order, he was tasked with training the young Force-sensitive Ezra Bridger throughout his eventual service to the larger Rebellion. Ultimately, Jarrus died to save his friends, in particular Hera Syndulla, who would later give birth to her and Jarrus' son, Jacen Syndulla. In Star Wars: Episode IX - The Rise of Skywalker, he appears as a disembodied voice alongside other past Jedi, empowering Rey to face a rejuvenated Darth Sidious.</p>
          </div>

          <div>
            <p class="detail-subtitle">Ezra Bridger</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Ezra Bridger">
            </figure>
            <p class="storyline">Ezra Bridger was a human Jedi Padawan who was born on the planet Lothal on the same day the Galactic Empire was established. He witnessed many injustices of the Imperial occupation of his homeworld for much of his childhood and was separated from his parents from a very early age. He was able to survive alone using street smarts and skills but was discovered by Kanan Jarrus to have potential Force sensitivity after he encounters the Spectres for the first time. After discovering how much of a team player he could be during a rescue operation, they recruited Bridger, who began training him in the ways of the Jedi under Jarrus, himself still a Jedi Padawan. Bridger took a long time learning how to wield a lightsaber and use it to deflect blaster bolts, modifying his first one to fire stun blasts in the interim. He was not well skilled in lightsaber duels against Inquisitors and Darth Vader, but later discovered his unique ability to use the Force to control and command animals, a skill that proved more useful several times during his service in the Rebellion. Bridger later went missing in action during the battle to liberate Lothal from Imperial occupation, where he successfully defeated Grand Admiral Thrawn, regarded by many as the Empire's best tactician.</p>
          </div>

          <div>
            <p class="detail-subtitle">Luke Skywalker</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Luke Skywalker">
            </figure>
            <p class="storyline">Luke Skywalker was a human Jedi Knight (later Master) and the protagonist of the original trilogy. As the last Padawan of Obi-Wan Kenobi, he became an important figure in the Rebel Alliance's struggle against the Galactic Empire. Luke was heir to a family deeply rooted in the Force, being the twin brother of Rebellion leader Princess Leia Organa of the planet Alderaan, the son of former Queen of Naboo and Republic Senator Padmé Amidala and Jedi turned Sith Lord Darth Vader (Anakin Skywalker), and the maternal uncle of Ben Solo. After redeeming his father from the dark side of the Force, who died killing his master and the last Sith, Darth Sidious, in order to save Luke, he set out to train a new generation of Jedi to rebuild the Order, only to have them wiped out by Supreme Leader Snoke, a puppet created by a revived Sidious, who also turned Ben to the dark side, adopting the Kylo Ren persona. Skywalker then spent the rest of his life in exile on Ahch-To, the original headquarters of the Jedi Order, blaming himself for Ben's turn and the destruction of his Order, until he was found by Rey, the Last Jedi and the secret granddaughter of Sidious, whom he reluctantly trained in the Jedi arts. Shortly after, he gave his life to distract Kylo Ren, now Supreme Leader of the First Order, on the planet Crait via a Force Projection, allowing the Resistance to escape. When Rey learned of her lineage and exiled herself on Ahch-To out of fear of turning to the dark side, Luke appeared before her as a Force spirit and encouraged her to face the Emperor. Along with the spirits of other past Jedi, he then empowered Rey during her final confrontation with Sidious, which marked the definitive defeat of the Sith. Later, he and Leia gave Rey their blessings to adopt the Skywalker surname and continue their family's legacy.</p>
          </div>

          <div>
            <p class="detail-subtitle">Leia Organa</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Leia Organa">
            </figure>
            <p class="storyline">Leia Organa was the daughter of Anakin Skywalker and Padmé Amidala, the twin sister of Luke Skywalker, and one of the main characters of the original and sequel trilogies. While Force-sensitive, she didn't become aware of her connection to the Force or her lineage until much later in life, instead focusing on a career as a senator and, secretly, a leader of the Rebel Alliance. As seen in The Rise of Skywalker, Leia began training as a Jedi under her brother shortly after Return of the Jedi, but quit her training when she had a vision that it would result in the death of her yet to be born son. Decades later, while leading the Resistance against the First Order, Leia also briefly mentored Rey in the ways of the Force, despite her limited knowledge about it. Ultimately, Leia gave her life to redeem her son, Ben Solo, who had turned to the dark side, and became one with the Force. Later, she and Luke gave Rey their blessings to adopt the Skywalker surname and continue their family's legacy.</p>
          </div>

          <div>
            <p class="detail-subtitle">Grogu</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Grogu">
            </figure>
            <p class="storyline">Grogu was a Jedi Initiate of the same species as Yoda who first appeared in The Mandalorian. Raised at the Jedi Temple on Coruscant during the Clone Wars, he was rescued by an unknown person during the Great Jedi Purge and hidden for his own safety. Decades later, the 50-year-old but still toddler Grogu was sought by a remnant of the Galactic Empire due to his connection to the Force, but was found and adopted by the Mandalorian bounty hunter Din Djarin, who sought to reunite him with the Jedi. When Grogu was eventually captured by Moff Gideon's Imperial remnant, Djarin mounted a rescue, which would have been unsuccessful if not for the arrival of Luke Skywalker (whom Grogu had previously contacted through the Force). With Djarin's approval, Luke took Grogu with him so that the child could be trained as a Jedi. Though Grogu briefly trained with Luke, he showed signs of not being fully committed to the Jedi path and wishing to be with Djarin instead, causing Luke to doubt his abilities as a teacher, as seen in The Book of Boba Fett. After speaking with Ahsoka Tano, Luke decided to let Grogu choose his own destiny, and the youngling ultimately returned to Djarin as his Mandalorian foundling.</p>
          </div>

          <div>
            <p class="detail-subtitle">Ben Solo</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Ben Solo">
            </figure>
            <p class="storyline">Ben Solo was a human Jedi Padawan and the central antagonist of the sequel trilogy. He was the son of smuggler and Rebel Alliance General Han Solo and Rebellion leader Princess Leia Organa, and the nephew of Jedi Master Luke Skywalker, having been born shortly after the Galactic Empire's defeat. As part of his uncle's new generation of Jedi, Ben trained under him, but was eventually seduced to the dark side by Supreme Leader Snoke, a puppet created by a revived Darth Sidious, the last Sith, and sought to become a Sith Lord, as powerful as his late maternal grandfather, Darth Vader (Anakin Skywalker). Following the destruction of Luke's New Jedi Order, Ben adopted the Kylo Ren persona and became a high-ranking officer in the First Order, as well as the leader of the Knights of Ren, an organization of fellow Force-wielders. He later killed his father when he unsuccessfully tried to redeem him and formed a unique connection with Rey, the last Jedi and Sidious' secret granddaughter, called a "dyad in the Force". After killing Snoke, Kylo took over as Supreme Leader of the First Order, until ultimately being redeemed by his mother and Rey, and helping Rey face Sidious, giving his own life to save hers.</p>
          </div>

          <div>
            <p class="detail-subtitle">Rey</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Rey">
            </figure>
            <p class="storyline">Rey was a human Jedi Padawan and the protagonist of the sequel trilogy. She was the paternal granddaughter of Darth Sidious, the last surviving Sith Lord, and was born in the years following the Galactic Empire's defeat. Abandoned on the desert planet of Jakku at a young age by her parents in order to keep her safe, she became involved in the conflict between the Resistance and the First Order, and formed a unique connection with Kylo Ren, called a "dyad in the Force". She was briefly trained by Luke Skywalker and, following his death, continued her Jedi training under the guidance of his sister and Resistance leader Leia Organa, as well as the ancient Jedi texts. Rey eventually learned of her lineage and, with the help of a redeemed Kylo Ren and the spirits of past Jedi, faced a revived Sidious, finally killing him and ending the Sith once and for all. She then renounced her lineage, becoming a Skywalker instead, prepared to find her own path.</p>
          </div>
        </div>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>