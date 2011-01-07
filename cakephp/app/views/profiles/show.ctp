<!-- File: /app/views/profiles/show.ctp -->

<h1>Profil: <?php echo $profile['Profile']['imie'].' '.$profile['Profile']['nazwisko'] ?></h1>

<p>Pseudonim: <?php echo $profile['Profile']['pseudonim']?></p>
<p style="border: 1px solid rgb(148,148,148); padding: 10px;">Fotka: <?php echo $this->Html->image('/attachments/photos/med/' . $profile['Profile']['profile_file_path']); ?></p>

<p><?php echo $html->link('Wszystkie profile', array('controller' => 'profiles', 'action' => 'index')) ?></p>