<!DOCTYPE html>
<html>

<?php
  include_once('people.php');
  $people = new People();
?>

<head>
  <title>Marek Grzes - School of Computing - University of Kent</title>
  <meta name="description" content="professional website for Marek Grzes" />
  <meta name="keywords" content="Marek Grzes" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />

</head>

<body>

<!-- Header -->
<div class="header">
      <h1><a href="index.html">Dr Marek Grzes</a></h1>
      <h2><a href="http://www.kent.ac.uk/computing">School of Computing</a></h2>
      <h2><a href="http://www.kent.ac.uk">University of Kent</a></h2>
</div>

<!-- Navigation Bar -->
<div class="navbar">
  <a href="index.html">Home</a>
  <a class="selected" href="publications.html">Publications</a>
  <a href="reviewing.html">Professional Activities</a>
  <a href="contact.html">Contact</a>
</div>

<!-- The flexible grid (content) -->
<div class="row">
  <div class="main">

<p>
Please email me if you cannot access any of my papers.
</p>

<h3>Refereed Publications</h3>

<ol>

  <li>
      <?php $people->get('Lisa Bonheme');?> and <?php $people->get('Marek Grzes');?>: Be More Active! Understanding the Differences Between Mean and Sampled Representations of Variational Autoencoders. <em>Journal of Machine Learning Research (JMLR)</em> 24(324): 1-30, 2023.<br/>
      <a href="https://jmlr.org/papers/v24/21-1145.html">[paper]</a>
  </li>

  <li>
      <?php $people->get('Peter Clapham');?> and <?php $people->get('Marek Grzes');?>: Posterior Collapse in Variational Gradient Origin Networks. <em>Proc. of the 22nd International Conference on Machine Learning and Applications (ICMLA)</em>, Jacksonville, USA, 2023.<br/>
       <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/clapham23vgons.pdf">[pdf]</a>
       <!--<a href="https://github.com/PeterS111/Fine-tuning-GPT-3-for-Poetry-
Generation-and-Evaluation">[github]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/piotr23whitman_and_kippling_slides.pdf">[slides]</a>-->
  </li>

  <li>
      <?php $people->get('Piotr Sawicki');?>, <?php $people->get('Marek Grzes');?>, Fabricio Goes, <?php $people->get('Dan Brown');?>, <?php $people->get('Max Peeperkorn');?>, and Aisha Khatun: Bits of Grass: Does GPT already know how to write like Whitman? <em>Proc. of the 14th International Conference on Computational Creativity (ICCC)</em>, Waterloo, Canada, 2023.<br/>
       <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/piotr23whitman_and_kippling.pdf">[pdf]</a> <a href="https://github.com/PeterS111/Fine-tuning-GPT-3-for-Poetry-
Generation-and-Evaluation">[github]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/piotr23whitman_and_kippling_slides.pdf">[slides]</a>
  </li>

  <li>
      Fabricio Goes, <?php $people->get('Piotr Sawicki');?>, <?php $people->get('Marek Grzes');?>, <?php $people->get('Dan Brown');?>, and Marco Volpe: Is GPT-4 Good Enough to Evaluate Jokes?. <em>Proc. of the 14th International Conference on Computational Creativity (ICCC)</em>, Waterloo, Canada, 2023.<br/>
       <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/piotr23whitman_and_kippling.pdf">[pdf]</a> <a href="https://github.com/PeterS111/Fine-tuning-GPT-3-for-Poetry-
Generation-and-Evaluation">[github]</a> <!--<a href="SPiCe2016/">[software and slides]</a>-->
  </li>

  <li>
      Fabricio Goes, Marco Volpe, <?php $people->get('Piotr Sawicki');?>, <?php $people->get('Marek Grzes');?>, and Jacob Watson: Pushing GPT's Creativity to Its Limits: Alternative Uses and Torrance Tests. <em>Proc. of the 14th International Conference on Computational Creativity (ICCC)</em>, Waterloo, Canada, 2023.<br/>
       <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/piotr23whitman_and_kippling.pdf">[pdf]</a> <a href="https://github.com/PeterS111/Fine-tuning-GPT-3-for-Poetry-
Generation-and-Evaluation">[github]</a> <!--<a href="SPiCe2016/">[software and slides]</a>-->
  </li>

  <li>
      <?php $people->get('Piotr Sawicki');?>, <?php $people->get('Marek Grzes');?>, Fabricio Goes, <?php $people->get('Dan Brown');?>, <?php $people->get('Max Peeperkorn');?>, Aisha Khatun, and Simona Paraskevopoulou: On the power of special-purpose GPT models to create and evaluate new poetry in old styles. <em>Proc. of the 14th International Conference on Computational Creativity (ICCC)</em>, Waterloo, Canada, 2023.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/piotr23whitman_and_kippling.pdf">[pdf]</a> <a href="https://github.com/PeterS111/Fine-tuning-GPT-3-for-Poetry-
Generation-and-Evaluation">[github]</a> <!--<a href="SPiCe2016/">[software and slides]</a>-->
  </li>

  <li>
      <?php $people->get('Lisa Bonheme');?> and <?php $people->get('Marek Grzes');?>: The Polarised Regime of identifiable Variational Autoencoders. <em>Proceedings of the First Tiny Papers Track at the International Conference on Learning Representations (Tiny@ICLR).</em> Kigali, Rwanda, 2023.<br/>
      <a href="https://openreview.net/pdf?id=iSkcAjBqUHU">[paper on openreview]</a>
  </li>

  <li>
      <?php $people->get('Theophile Champion');?>, <?php $people->get('Marek Grzes');?>, and <?php $people->get('Howard Bowman');?>: Branching Time Active Inference with Bayesian Filtering. <em>Neural Computation</em> 34(10): 2132-2144, 2022.<br/>
      <a href="https://kar.kent.ac.uk/95495/1/NECO-NEURCOMP-D-21-00332R1-PDF.pdf">[pdf on KAR]</a>
  </li>

  <li>
      <?php $people->get('Theophile Champion');?>, <?php $people->get('Howard Bowman');?>, and <?php $people->get('Marek Grzes');?>: Branching Time Active Inference: empirical study and complexity class analysis. <em>Neural Networks,</em> 152: 450-466, 2022.<br/>
      <a href="https://arxiv.org/pdf/2111.11276.pdf">[pdf on arXiv]</a>
  </li>

  <li>
      <?php $people->get('Piotr Sawicki');?>, <?php $people->get('Marek Grzes');?>, <?php $people->get('Anna Jordanous');?>, <?php $people->get('Dan Brown');?>, and <?php $people->get('Max Peeperkorn');?>: Training GPT-2 to represent two Romantic-era authors: challenges, evaluations and pitfalls. <em>Proc. of the 13th International Conference on Computational Creativity (ICCC)</em>, pp. 34-43, Bozen-Bolzano, Italy, 2022.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/piotr22Byron_and_Shelly.pdf">[pdf]</a> <a href="https://github.com/PeterS111/GPT-2-for-Byron-and-Shelley">[github]</a> <!--<a href="SPiCe2016/">[software and slides]</a>-->
  </li>

  <li>
      <?php $people->get('Theophile Champion');?>, <?php $people->get('Lancelot Da Costa');?>, <?php $people->get('Howard Bowman');?>, and <?php $people->get('Marek Grzes');?>: Branching Time Active Inference: The theory and its generality. <em>Neural Networks</em>, 151: 295-316, 2022.<br/>
      <a href="https://arxiv.org/pdf/2111.11107.pdf">[pdf on arXiv]</a>
  </li>

  <li>
      <?php $people->get('Theophile Champion');?>, <?php $people->get('Marek Grzes');?>, and <?php $people->get('Howard Bowman');?>: Realising Active Inference in Variational Message Passing: the Outcome-blind Certainty Seeker. <em>Neural Computation</em>, 33 (10): 2762-2826, ISSN 0899-7667, 2021.<br/>
      <a href="https://arxiv.org/abs/2104.11798">[pdf on arXiv]</a>
  </li>

  <li>
      <?php $people->get('Lisa Bonheme');?> and <?php $people->get('Marek Grzes');?>: SESAM at SemEval-2020 Task 8: Investigating the relationship between image and text in sentiment analysis of memes. <em>Proceedings of the International Workshop on Semantic Evaluation (SemEval).</em> Barcelona, Spain, 2020.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/bonheme20SemEval2020.pdf">[paper]</a>
  </li>

  <li>
      Anthony Casey, <?php $people->get('Hannan Azhar')?>, <?php $people->get('Marek Grzes');?> and <?php $people->get('Mohamed Sakel')?>: BCI controlled robotic arm as assistance to the rehabilitation of neurologically disabled patients. <em>Disability and Rehabilitation: Assistive Technology.</em> 2019. DOI: <a href="https://doi.org/10.1080/17483107.2019.1683239">10.1080/17483107.2019.1683239 </a><br/>
      <a href="https://kar.kent.ac.uk/78608/1/BCI%20controlled%20robotic%20arm%20as%20assistance%20to%20the%20rehabilitation%20of%20neurologically%20disabled%20patients.pdf">[paper]</a>
  </li>

  <li>
      <?php $people->get('Lee Harris');?> and <?php $people->get('Marek Grzes');?>: Comparing Explanations between Random Forests and Artificial Neural
Networks. <em>Proceedings of the IEEE International Conference on Systems, Man, and Cybernetics (IEEE SMC).</em> Bari, Italy, 2019.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/harris19comparing.pdf">[paper]</a>
  </li>

  <li>
      <?php $people->get('Farhana Ferdousi Liza');?> and <?php $people->get('Marek Grzes');?>: Relating RNN layers with the spectral WFA ranks in sequence modelling. <em>Proceedings of the ACL workshop on Deep Learning and Formal Languages: Building Bridges.</em> Florence, Italy, 2019.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/liza19DelFol.pdf">[paper]</a>
  </li>

  <li>
      <?php $people->get('Rogerio de Lemos');?> and <?php $people->get('Marek Grzes');?>: Self-adaptive Artificial Intelligence. <em>Proceedings of IEEE/ACM 14th International Symposium on Software Engineering for Adaptive and Self-Managing Systems (SEAMS).</em> Montreal, Canada, 2019.<br/>
      <a href="https://kar.kent.ac.uk/73259/1/SEAMS2019%20%288%29.pdf">[paper]</a>
  </li>

  <li>
      <?php $people->get('Farhana Ferdousi Liza');?> and <?php $people->get('Marek Grzes');?>: Improving Language Modelling with Noise Contrastive Estimation. <em>Proceedings of AAAI.</em> New Orleans, USA, 2018.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/liza18aaai.pdf">[paper]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/slide-2min-aaai18.pdf">[slides]</a>
  </li>

  <li>
      <?php $people->get('Marek Grzes');?>: Reward Shaping in Episodic Reinforcement Learning. <em>Proceedings of the 16th International Conference on Autonomous Agents and Multiagent Systems (AAMAS).</em> Sao Paulo, Brazil, 2017.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes17goals-in-pbrs.pdf">[paper]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes17aamas-slides.pdf">[slides]</a>
  </li>

  <li>
      <?php $people->get('Farhana Ferdousi Liza');?> and <?php $people->get('Marek Grzes');?>: A Spectral Method that Worked Well in the SPiCe&#39;16
Competition. <em>International Conference on Grammatical Inference (ICGI).</em> Delft, The Netherlands, 2016.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/liza16spice.pdf">[paper]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/SPiCe2016/">[software and slides]</a>
  </li>

  <li>
      <?php $people->get('Farhana Ferdousi Liza');?> and <?php $people->get('Marek Grzes');?>: Estimating the Accuracy of Spectral Learning for HMMs. <em>The 17th International Conference on Artificial Intelligence: Methodology, Systems, Applications (AIMSA).</em> LNCS vol. 9883. Varna, Bulgaria, 2016.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/farhana16HMMs.pdf">[paper]</a>
  </li>

  <li>
      <?php $people->get('Farhana Ferdousi Liza');?> and <?php $people->get('Marek Grzes');?>: An Improved Crowdsourcing Based Evaluation Technique for Word Embedding Methods. <em>The First Workshop on Evaluating Vector Space Representations for NLP (RepEval at ACL).</em> Berlin, Germany, 2016.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/farhana16repeval.pdf">[pdf]</a>
  </li>

  <li>
      Mauro Vallati, Lukas Chrpa, <?php $people->get('Marek Grzes');?>, Thomas L McCluskey, Mark Roberts, and Scott Sanner: The 2014 International Planning Competition: Progress and Trends. <em>AI Magazine.</em> Vol. 36(3), pp.90-98, AAAI, 2015.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/vallati15aimag_ipc.pdf">[pdf]</a> <a href="http://dx.doi.org/10.1609/aimag.v36i3.2571">[doi]</a>
  </li>

  <li>
      <?php $people->get('Marek Grzes');?> and <?php $people->get('Pascal Poupart');?>: Incremental Policy Iteration with Guaranteed Escape from Local Optima in POMDP Planning. <em>Proceedings of the International Conference on Autonomous Agents and Multiagent Systems (AAMAS).</em> Istanbul, Turkey, 2015.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes15aamas.pdf">[pdf]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes15aamas_slides.pdf">[slides]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes15aamas_poster.pdf">[poster]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes15aamas.bib">[bibtex]</a>
  </li>

  <li>
      <?php $people->get('Marek Grzes');?>, <?php $people->get('Pascal Poupart');?>, Xiao Yang, and <?php $people->get('Jesse Hoey');?>. Energy Efficient Execution of POMDP Policies. <em>IEEE Transactions on Cybernetics.</em> Volume: 45, Issue: 11, Pages: 2484-2497, 2015. <br/>
      <a href="http://dx.doi.org/10.1109/TCYB.2014.2375817">[doi]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes15tcyb.bib">[bibtex]</a> ICAPS'15 Journal Track Presentation: <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes15tcybICAPSSlides.pdf">[slides]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes15tcybICAPSPoster.pdf">[poster]</a>
  </li>

  <li>
      <?php $people->get('Marek Grzes');?> and <?php $people->get('Pascal Poupart');?>: POMDP Planning and Execution in an Augmented Space. <em>Proceedings of the International Conference on Autonomous Agents and Multiagent Systems (AAMAS).</em> Paris, France, 2014.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes14aamas.pdf">[pdf]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes14aamas_slides.pdf">[slides]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes14aamas_poster.pdf">[poster]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes14aamas.bib">[bibtex]</a>
  </li>

  <li>
      <?php $people->get('Marcin Czajkowski');?>, <?php $people->get('Marek Grzes');?>, and <?php $people->get('Marek Kretowski');?>: Multi-test Decision Tree and its Application to Microarray Data Classification. <em>Artificial Intelligence in Medicine <a href="http://www.journals.elsevier.com/artificial-intelligence-in-medicine/">(AIIM)</a>.</em> Elsevier, 2014.<br/>
      <a href="http://dx.doi.org/10.1016/j.artmed.2014.01.005">[doi]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/czajk14aiim.bib">[bibtex]</a>
  </li>

  <li>
      <?php $people->get('Marek Grzes');?>, <?php $people->get('Jesse Hoey');?>, <?php $people->get('Shehroz Khan');?>,
      <?php $people->get('Alex Mihailidis');?>, <?php $people->get('Stephen Czarnuch');?>, <?php $people->get('Dan Jackson');?>
      and <?php $people->get('Andrew Monk');?>: Relational Approach to Knowledge Engineering for POMDP-based Assistance Systems as a Translation of a Psychological Model. <em>International Journal of Approximate Reasoning <a href="http://www.journals.elsevier.com/international-journal-of-approximate-reasoning/">(IJAR)</a>. Special Issue of Applications of Bayesian Networks.</em> Vol. 55(1), Part 1, pages 36-58, Elsevier, 2014.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzesIJARFinal.pdf">[pdf]</a> <a href="http://dx.doi.org/10.1016/j.ijar.2013.03.006">[doi]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/code/web-snap/">[software]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes14IJAR.bib">[bibtex]</a>
  </li>

  <li>
      <?php $people->get('Marek Grzes');?>, <?php $people->get('Pascal Poupart');?> and <?php $people->get('Jesse Hoey');?>: Controller Compilation and Compression for Resource Constrained Applications.
      <em>Proceedings of International Conference on Algorithmic Decision Theory (ADT).</em> Brussels, Belgium, 2013.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes13adt.pdf">[pdf]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes13adt-slides-2x2.pdf">[slides]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes13adt.bib">[bibtex]</a>
  </li>

  <li>
      <?php $people->get('Marek Grzes');?>, <?php $people->get('Pascal Poupart');?> and <?php $people->get('Jesse Hoey');?>: Isomorph-free Branch and Bound Search for Finite State Controllers.
      <em>Proceedings of International Joint Conference on Artificial Intelligence (IJCAI).</em> Beijing, China, 2013.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes13ijcai.pdf">[pdf]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes13ijcai-poster.pdf">[poster]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/code/IsoFreeBB/">[software]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes13ijcai.bib">[bibtex]</a>
  </li>

  <li>
      <?php $people->get('Marek Grzes');?> and <?php $people->get('Jesse Hoey');?>: On the Convergence of Techniques that Improve Value Iteration.
      <em>Proceedings of International Joint Conference on Neural Networks (IJCNN).</em> Dallas, USA, 2013. <br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes13ijcnn.pdf">[pdf]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes13ijcnn-poster.pdf">[poster]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes13ijcnn.bib">[bibtex]</a>
  </li>

  <li><?php $people->get('Jesse Hoey');?>, Xiao Yang, <?php $people->get('Marek Grzes');?>, Rene Navarro and Jesus Favela. Modeling and Learning for LaCasa, the Location And Context-Aware Safety Assistant. <em>In NIPS 2012 Workshop on Machine Learning Approaches to Mobile Context Awareness.</em> Lake Tahoe, NV, 2012.
  </li>
  <li><?php $people->get('Marek Grzes');?> and <?php $people->get('Jesse Hoey');?>: Analysis of Methods for solving MDPs.
    <em>In Proceedings of the 11th International Conference on Autonomous Agents and Multiagent Systems (AAMAS).</em> Valencia, Spain, 2012.
    <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes12aamas.pdf">(pdf)</a>
  </li>
  <li>Michael G. Melonis, <?php $people->get('Alex Mihailidis');?>, Ryan Keyfitz, <?php $people->get('Marek Grzes');?>, <?php $people->get('Jesse Hoey');?>, and Cathy Bodine: Empowering Adults With a Cognitive Disability Through Inclusion of Non-Linear Context Aware Prompting Technology (N-CAPS).
    <em>In Proceedings of the RESNA Annual Conference.</em> Baltimore, USA, 2012.
    <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/melonis12resna.pdf">(pdf)</a>
  </li>
  <li><?php $people->get('Marcin Czajkowski');?>, <?php $people->get('Marek Grzes');?>, and <?php $people->get('Marek Kretowski');?>.
      Multi-Test Decision Trees for Gene Expression Data Analysis. <em>In Proceedings of the International Joint Conference on
Security and Intelligent Information Systems.</em> Warsaw, Poland, Springer, LNCS, 7053: 154-167, 2011.
      <a href="http://dx.doi.org/10.1007/978-3-642-25261-7_12">(url)</a>
  </li>
  <li><?php $people->get('Veronika Koltunova');?>, <?php $people->get('Jesse Hoey');?>, and <?php $people->get('Marek Grzes');?>.
      Goal-Oriented Sensor Selection for Intelligent Phones (GOSSIP). <em>In Proceedings of the UbiComp International
      Workshop on Situation, Activity and Goal Awareness.</em> Beijing, China, ACM, 2011.
      <a href="http://dx.doi.org/10.1145/2030045.2030063">(url)</a>
  </li>
  <li><?php $people->get('Marek Grzes');?>, <?php $people->get('Jesse Hoey');?>, <?php $people->get('Shehroz Khan');?>,
      <?php $people->get('Alex Mihailidis');?>, <?php $people->get('Stephen Czarnuch');?>, <?php $people->get('Dan Jackson');?>
      and <?php $people->get('Andrew Monk');?>: Relational Approach to Knowledge Engineering for POMDP-based
      Assistance Systems with Encoding of a Psychological Model. <em>In Proceedings of the ICAPS 2011 Workshop
      on  Knowledge Engineering for Planning and Scheduling (KEPS)</em>, Freiburg, Germany, 2011.
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes11keps.pdf">(pdf)</a>.
  </li>
  <li><?php $people->get('Sam Devlin');?>, <?php $people->get('Daniel Kudenko');?>, and <?php $people->get('Marek Grzes');?>. An empirical study of potential-based reward
      shaping and advice in complex, multi-agent systems. <em>Advances in Complex Systems</em>, 14(2): 251-278, 2011.
      <a href="http://dx.doi.org/10.1142/S0219525911002998">(url)</a>
  </li>
  <li><?php $people->get('Jesse Hoey');?> and <?php $people->get('Marek Grzes');?>: Distributed control of situated assistance in large domains with many
      tasks. <em>In Proceedings of International Conference on Automated Planning and Scheduling (ICAPS)</em>,
      Freiburg, Germany, 2011.
  </li>
  <li><?php $people->get('Marek Grzes');?> and <?php $people->get('Jesse Hoey');?>: Efficient planning in R-max. <em>In Proceedings of the 10th International
      Conference on Autonomous Agents and Multiagent Systems (AAMAS)</em>, Taipei, Taiwan, 2011.
  </li>
  <li><?php $people->get('Sam Devlin');?>, <?php $people->get('Marek Grzes');?>, and <?php $people->get('Daniel Kudenko');?>: Multi-agent, potential-based reward shaping for
      robocup keepaway. <em>In Proceedings of the 10th International Conference on Autonomous Agents and
      Multiagent Systems (AAMAS)</em>, Taipei, Taiwan, 2011.
  </li>
  <li><?php $people->get('Marek Grzes');?> and <?php $people->get('Daniel Kudenko');?>: Reward shaping and mixed resolution function approximation.
      <em>In Developments in Intelligent Agent Technologies and Multi-Agent Systems: Concepts and Applications</em>.
      IGI Press, 2011.</br>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes11reward-shaping-chapter.pdf">[pdf]</a>
  </li>
  <li><?php $people->get('Sam Devlin');?>, <?php $people->get('Marek Grzes');?>, and <?php $people->get('Daniel Kudenko');?>: Multi-agent Reinforcement Learning with Reward Shaping
      for KeepAway Takers.  <em>In Proceedings of AAMAS 2010 Workshop on Adaptive and Learning Agents (ALA 2010)</em>,
      Toronto, Canada, 2010.
  </li>
    <li>
      <?php $people->get('Marek Grzes');?> and <?php $people->get('Daniel Kudenko');?>: PAC-MDP learning with knowledge-based admissible models.
      <em>In Proceedings of the 9th International Conference on Autonomous Agents and Multiagent Systems (AAMAS)</em>, Toronto, Canada, 2010, ACM Press.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes10aamas-slides.pdf">[slides]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes10aamas-poster.pdf">[poster]</a>
    </li>
  <li><?php $people->get('Marek Grzes');?> and <?php $people->get('Daniel Kudenko');?>: Online learning of shaping rewards in reinforcement learning.
      <em>Neural Networks</em>, 23(4): 541-550, 2010.<br/>
      <a href="http://eprints.whiterose.ac.uk/47293/1/nnjournal.pdf">[pdf]</a>
  </li>
  <li><?php $people->get('Marek Grzes');?> and <?php $people->get('Daniel Kudenko');?>: Theoretical and empirical analysis of reward shaping
      in reinforcement learning. <em>In Proceesings of International Conference on Machine Learning and Applications</em>,
      Miami, USA, 2009. IEEE Computer Society.
  </li>
  <li><?php $people->get('Marek Grzes');?> and <?php $people->get('Daniel Kudenko');?>: Learning shaping rewards
      in model-based reinforcement learning. <em>In Proceedings of AAMAS 2009 Workshop on Adaptive Learning Agents
      (ALA 2009)</em>, Budapest, Hungary, 2009.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes09ALA_Learning_Shaping_Rewards_in_Model-based_RL.pdf">[pdf]</a>
  </li>
  <li><?php $people->get('Marek Grzes');?> and <?php $people->get('Daniel Kudenko');?>: Reinforcement learning
      with reward shaping and mixed resolution function approximation. <em>International Journal of Agent Technologies
      and Systems (IJATS)</em>, 1(2):36-54, 2009.
  </li>
  <li><?php $people->get('Sam Devlin');?>, <?php $people->get('Marek Grzes');?>, and <?php $people->get('Daniel Kudenko');?>:
      Reinforcement learning in robocup keepaway with partial observability. <em>In Proceedings of the  IEEE/WIC/ACM
      International Conferences on Intelligent Agent Technology (IAT 2009)</em>, Milan, Italy, 2009. IEEE Computer Society.
  </li>
  <li><?php $people->get('Marek Grzes');?> and <?php $people->get('Daniel Kudenko');?>: Improving optimistic exploration
      in model-free reinforcement learning. <em>In Proceeding of the International Conference on Adaptive and Natural
      Computing Algorithms (ICANNGA'09)</em>, volume 5495 of LNCS, Kuopio, Finland, 2009. Springer.
  </li>
  <li><?php $people->get('Marek Grzes');?>, <?php $people->get('Daniel Kudenko');?>: Plan-based reward shaping for
      reinforcement learning. <em>In: Proceedings of the 4th IEEE International Conference on Intelligent Systems
      (IS 2008)</em>, IEEE, vol. 2:22-29, Varna, Bulgaria, 2008.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes08IS.pdf">[paper]</a>
      <a href="http://ieeexplore.ieee.org/xpl/freeabs_all.jsp?arnumber=4670492">[IEEE link]</a>
  </li>
  <li><?php $people->get('Marek Grzes');?>, <?php $people->get('Daniel Kudenko');?>: Robustness Analysis of SARSA(lambda):
      Different Models of Reward and Initialisation. <em>In: Proceedings of the 13th International Conference on Artificial
      Intelligence: Methodology, Systems, Applications (AIMSA 2008)</em>, Springer LNAI, vol. 5253:144-156, Varna, Bulgaria, 2008.
      <a href="http://dx.doi.org/10.1007/978-3-540-85776-1_13">(url)</a>
  </li>
  <li><?php $people->get('Marek Grzes');?>, <?php $people->get('Daniel Kudenko');?>: Multigrid reinforcement learning with
      reward shaping. <em>In: Proceedings of the 18th International Conference on Artificial Neural Networks (ICANN 2008)</em>,
      Springer LNCS, vol. 5163:357-366, Prague, Czech Republic, 2008.
      <a href="http://dx.doi.org/10.1007/978-3-540-87536-9_37">(url)</a>
  </li>
  <li><?php $people->get('Marek Grzes');?>, <?php $people->get('Daniel Kudenko');?>: An Empirical Analysis of the Impact of
      Prioritised Sweeping on the DynaQ's Performance. <em>In: Proceedings of the 9th International Conference on Artificial
      Intelligence and Soft Computing (ICAISC 2008)</em>, Springer LNCS, vol. 5097:1041-1051, Zakopane, Poland, 2008.
      <a href="http://dx.doi.org/10.1007/978-3-540-69731-2_98">(url)</a>
  </li>
  <li><?php $people->get('Marek Grzes');?>, <?php $people->get('Daniel Kudenko');?>: Learning potential for reward shaping
      in reinforcement learning with tile coding. <em>In Proceedings of the AAMAS'08 Workshop on Adaptive and Learning
      Agents and Multi-Agent Systems (ALAMAS-ALAg 2008)</em>, pages 17-23, Estoril, Portugal, 2008.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes08alamas_tile_coding.pdf">[paper]</a>
  </li>
  <li><?php $people->get('Marek Grzes');?>, <?php $people->get('Daniel Kudenko');?>: Plan-based reward shaping for reinforcement
      learning. <em>In Proceedings of the AAMAS'08 Workshop on Adaptive and Learning Agents and Multi-Agent Systems
      (ALAMAS-ALAg 2008)</em>, pages 9-16, Estoril, Portugal, 2008.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes08alamas_plan-based.pdf">[paper]</a>
  </li>
  <li><?php $people->get('Marek Kretowski');?>, <?php $people->get('Marek Grzes');?>: Global Induction of Decision Trees.
      <em>Encyclopedia of Data Warehousing and Mining - 2nd Edition</em>, Idea Group Inc., 2008.
  </li>
  <li><?php $people->get('Marek Kretowski');?>, <?php $people->get('Marek Grzes');?>: Evolutionary Induction of Mixed Decision Trees.
      In Wang, J. (Ed.), <em>Data Warehousing and Mining: Concepts, Methodologies, Tools, and Applications</em>, Idea Group Inc., 2008.
  </li>
  <li><?php $people->get('Marek Kretowski');?>, <?php $people->get('Marek Grzes');?>: Evolutionary Induction of Mixed Decision Trees.
      <em>International Journal of Data Warehousing and Mining</em>, vol. 3(4): 68-82, 2007.
      <a href="http://www.igi-global.com/articles/details.asp?ID=7453">(url)</a>
  </li>
  <li><?php $people->get('Marek Grzes');?>, <?php $people->get('Marek Kretowski');?>: Decision Tree Approach to Microarray
      Data Analysis. <em>Biocybernetics and Biomedical Engineering</em>, vol. 27(3): 29-42, 2007.<br>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes07bbe.pdf">[pdf]</a>
  </li>
  <li><?php $people->get('Marek Kretowski');?>, <?php $people->get('Marek Grzes');?>: Evolutionary Induction of Decision
      Trees for Misclassification Cost Minimization. <em>In: Proceedings of 8th International Conference on Adaptive and
      Natural Computing Algorithms (ICANNGA 2007)</em>, Warsaw, Poland, Springer LNCS, vol. 4431:1-10, 2007.<br>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/icannga2007.pdf">[pdf]</a>
  </li>
  <li><?php $people->get('Marek Kretowski');?>, <?php $people->get('Marek Grzes');?>: Evolutionary Induction of Cost-Sensitive
      Decision Trees. <em>In: Proceedings of 16th International Symposium on Methodologies for Intelligent Systems (ISMIS 2006)</em>,
      Bari, Italy, Springer LNAI, vol. 4203:121-126, 2006.<br>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/ismis06.pdf">[pdf]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/code/evoldectrees/index.html">[software]</a>
  </li>
  <li><?php $people->get('Marek Kretowski');?>, <?php $people->get('Marek Grzes');?>: Mixed Decision Trees: An Evolutionary Approach.
      <em>In: Proceedings of 8th International Conference on Data Warehousing and Knowledge Discovery (DaWaK 2006)</em>,
      Krakow, Poland, Springer LNCS, vol. 4081:260-269, 2006.
  </li>
  <li><?php $people->get('Marek Kretowski');?>, <?php $people->get('Marek Grzes');?>: Evolutionary Learning of Linear Trees with
      Embedded Feature Selection. <em>In: Proceedings of 8th International Conference on Artificial Intelligence and Soft Computing
      (ICAISC 06)</em>, Zakopane, Poland, Springer LNCS, vol. 4029:400-409, 2006.
  </li>
  <li><?php $people->get('Marek Grzes');?>, <?php $people->get('Marek Kretowski');?>: Decision tree approach to microarray
      data analysis. <em>In: Proceedings of 6th International Seminar on Statistics and Clinical Practice</em>.
      Lecture Notes in The ICB Seminar, vol. 70:105-111, 2005.
  </li>
  <li><?php $people->get('Marek Kretowski');?>, <?php $people->get('Marek Grzes');?>: Global learning of decision trees by an evolutionary algorithm.
      <em>In: Information Processing and Security Systems</em>. Springer, pages 401-410, 2005.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/kr05iss.pdf">[pdf]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/kr05iss.bib">[bibtex]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/code/evoldectrees/index.html">[software]</a>
  </li>
  <li><?php $people->get('Marek Kretowski');?>, <?php $people->get('Marek Grzes');?>: Global Induction of Oblique Decision Trees:
      An Evolutionary Approach. <em>In: Intelligent Information Processing and Web Mining. Proceedings of Intelligent
      Information Systems (IIS 2005)</em>, Springer, pages 309-319, 2005.<br/>
      <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/kr05iis.pdf">[pdf]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/kr05iis.bib">[bibtex]</a> <a href="https://www.cs.kent.ac.uk/people/staff/mg483/code/evoldectrees/index.html">[software]</a>
  </li>
  <li><?php $people->get('Marek Kretowski');?>, <?php $people->get('Marek Grzes');?>:
      An evolutionary algorithm for global induction of decision trees.
     <em>ACS-CISIM 04</em>, pages 63-70, Elk, Poland, 2004.
  </li>
</ol>

</p>

<h3>Other Publications</h3>
<p>
  <ol>
  <li>
      <?php $people->get('Theophile Champion');?>, <?php $people->get('Marek Grzes');?>, <?php $people->get('Lisa Bonheme');?>, and <?php $people->get('Howard Bowman');?>: Deconstructing deep active inference. <em>CoRR abs/2303.01618</em>, 1-59, 2023.<br/>
      <a href="https://arxiv.org/abs/2303.01618">[pdf]</a>
  </li>
  <li>
      Jack Shannon and <?php $people->get('Marek Grzes');?>: Reinforcement Learning using Augmented Neural Networks. CoRR abs/1806.07692, 2018.<br/>
      <a href="https://arxiv.org/abs/1806.07692">[paper]</a>
  </li>

    <li><?php $people->get('Daniel Kudenko');?> and <?php $people->get('Marek Grzes');?>: Knowledge-based reinforcement learning for data mining. <em>In Proceedings of the AAMAS workshop on Agents and Data Mining Interaction</em>, volume 5680 of LNCS, Budapest, Hungary, 2009. Springer-Verlag.<br/>
    <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/kudenko09kbrl4dm.pdf">[pdf]</a>
    </li>
  </ol>
</p>

<h3>Dissertations</h3>
<p>
  <ul>
    <li>Marek Grzes: <a href="http://etheses.whiterose.ac.uk/936/">Improving Exploration in Reinforcement
        Learning through Domain Knowledge and Parameter Analysis</a>. PhD thesis, <a href="http://www.cs.york.ac.uk/">University of</a><a href="http://en.wikipedia.org/wiki/York"> York</a>, United Kingdom, 2010. <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/mgrzes-thesis-template.tar.gz">(latex source)</a>
    </li>
    <li>Marek Grzes: <a href="https://www.cs.kent.ac.uk/people/staff/mg483/documents/grzes03msc.pdf">Parallel
        execution of SQL queries in a distributed heterogeneous database environment</a>. MSc Eng. dissertation,
        Bialystok University of Technology, Poland, 2003.
    </li>
  </ul>
</p>

  </div>
  <div class="side">

        <p style="text-align:center;"> <img src="style/grzes2015.jpg" style="max-width: 50%; margin: 10px;"> </p>
        <ul>
          <li><a href="https://www.kent.ac.uk/computing/people/3125/grzes-marek">My University Website</a></li>
          <li><a href="https://uk.linkedin.com/in/marekgrzes">My Linkedin Profile</a></li>
        </ul>

<!--<p>
        <a href="https://uk.linkedin.com/in/marekgrzes"><img src="style/linkedin.jpg" alt="My Linkedin profile"></a>&nbsp;
</p>-->

        <h3>Useful Links</h3>
        <ul>
          <li><a href="https://research.kent.ac.uk/artificial-intelligence-and-data-science/">AI&amp;DS Research Group @ Kent</a></li>
          <li><a href="https://www.kent.ac.uk/courses/postgraduate/283/computer-science">Apply for a Research Degree in Computer Science @ Kent</a></li>
          <li><a href="https://www.kent.ac.uk/business-and-partnerships/">Business and Partnerships with Kent</a></li>
          <li><a href="https://www.cs.kent.ac.uk/systems/hydra/conda.html">Using Python on Hydra</a></li>
        </ul>

  </div>
</div>

<!-- Footer -->
<div class="footer">
        Marek Grzes @ University of Kent | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
</div>

</body>
</html>

