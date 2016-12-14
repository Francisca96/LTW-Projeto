CREATE TABLE news (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	title VARCHAR,
	introduction VARCHAR,
	fulltext VARCHAR
);

CREATE TABLE comments (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	news_id INTEGER REFERENCES news,
	author VARCHAR,
	text VARCHAR
);

CREATE TABLE users (
  username VARCHAR PRIMARY KEY,
  password VARCHAR
);

INSERT INTO news VALUES (NULL, 'Sed nibh arcu', 'Sed nibh arcu, euismod elementum commodo ut, auctor id quam. Ut imperdiet diam vitae quam condimentum ac pharetra arcu cursus. Etiam sed leo eros. Vestibulum interdum pulvinar dapibus. Proin convallis nulla in magna commodo in euismod nisl ornare. Vivamus suscipit arcu ut diam fermentum et dictum nisl tempus. Integer tincidunt neque nec arcu fringilla in feugiat mauris porttitor. Pellentesque lorem augue, facilisis non pharetra ac, auctor nec erat. Donec purus augue, accumsan ac mattis quis, consequat eu ante. Fusce iaculis sem a ante consectetur ac bibendum tellus gravida. Integer eu augue metus, vitae fermentum elit. Nulla ullamcorper, libero nec scelerisque tempus, nunc ipsum pellentesque quam, ac adipiscing nisl turpis nec arcu. Vestibulum lorem sem, scelerisque ut placerat rutrum, molestie viverra ante. Integer mollis placerat viverra.', 'Aliquam mollis consequat dui, id auctor nisl suscipit id. Suspendisse a nulla velit. Donec ac ante neque, vel hendrerit lacus. Praesent at risus tellus. Duis varius lorem non ante laoreet lobortis. Nulla erat dui, rhoncus eget bibendum id, suscipit tincidunt dolor. Aliquam malesuada felis a massa auctor pharetra. Cras felis leo, dictum porta tempus aliquam, porttitor eu mi.

Praesent adipiscing placerat nibh, vitae euismod libero blandit a. Vestibulum dignissim ultricies vestibulum. Suspendisse potenti. Curabitur ligula ante, molestie vel suscipit vitae, ornare at sem. Etiam sit amet magna sed nulla feugiat vestibulum. Donec interdum, lectus nec cursus pellentesque, turpis odio imperdiet lectus, laoreet placerat nisl massa ac eros. Sed in eros quis sapien imperdiet porta vitae non metus. Integer a lacus dictum nisl dictum posuere. Nullam in tristique metus. Integer nec odio turpis. Quisque rhoncus euismod urna sed pretium. Nam elementum purus sit amet arcu semper ut ultricies erat mattis. Suspendisse egestas, lorem vitae blandit aliquet, neque velit dignissim ipsum, dapibus molestie mi lacus lobortis elit. Etiam non velit erat.');

INSERT INTO news VALUES (NULL, 'Sed justo metus', 'Sed justo metus, suscipit non fermentum non, sagittis quis arcu. Curabitur tincidunt leo non magna blandit tincidunt. Nunc pellentesque tellus nec mauris cursus ornare. Vivamus tristique lectus et augue sodales gravida egestas tellus elementum. Proin ante purus, rhoncus sed mattis et, mattis a lectus. Pellentesque ultricies hendrerit nisl ac aliquet. Phasellus lobortis libero non tortor tempus sed consequat sem pellentesque. Nam nec turpis eros, eu rutrum leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;', 'Vivamus ultrices, sem non sodales gravida, elit ipsum convallis ante, quis elementum risus ante a turpis. Nullam convallis mauris lorem, id consequat erat. Donec ac nulla quis leo porttitor tempor. Sed venenatis, tellus et bibendum semper, tellus dolor elementum ipsum, eu molestie lacus est non nulla. Vivamus hendrerit, neque et interdum egestas, dolor elit placerat lorem, ac scelerisque tellus velit sed felis. Ut dolor augue, volutpat accumsan consequat nec, consectetur sed elit. Sed rutrum nibh nunc. Maecenas egestas velit vitae diam interdum sit amet pharetra dui lacinia. Maecenas nisi arcu, mollis nec lobortis vitae, interdum non est. Etiam ac nulla massa, at ullamcorper tortor. Mauris euismod mattis leo, sit amet mollis massa commodo quis. Suspendisse vitae lectus urna, at euismod eros. Nulla facilisi.

Etiam mollis imperdiet vestibulum. Praesent sodales tempus velit sit amet rhoncus. Aenean non tincidunt tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Aliquam venenatis nisi sed felis pretium vulputate. Cras tincidunt convallis egestas. Morbi eleifend felis eget libero pharetra id gravida nisl faucibus. Nulla cursus, dolor et varius luctus, neque orci facilisis est, eu volutpat libero nulla sed ante. Cras dictum metus nec elit consequat a rutrum ante pharetra. Etiam lobortis mauris ac sapien volutpat viverra rhoncus est convallis.');

INSERT INTO news VALUES (NULL, 'Maecenas ipsum elit', 'Maecenas ipsum elit, vestibulum id blandit vel, euismod ut urna. Sed nisi lectus, fermentum non fermentum at, pharetra sed nisl. Etiam scelerisque viverra erat, sit amet consequat elit cursus eget. In a erat vel quam tristique adipiscing. Nunc augue urna, pretium ac dictum a, hendrerit et nibh. In elementum tristique nibh, sed luctus nunc sodales eu. Mauris laoreet ullamcorper lorem, eu semper turpis rhoncus id. Morbi turpis erat, iaculis quis mattis eget, ornare pretium arcu. In pretium turpis vel nibh commodo pretium. Sed id magna nisi.', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur porttitor commodo imperdiet. Pellentesque lorem nibh, imperdiet faucibus fringilla eget, hendrerit sodales dolor. Curabitur id dui tortor, sed ullamcorper mi. Vestibulum ut odio ac justo facilisis blandit vitae nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris at quam massa. Nulla ut urna leo. Aliquam neque sapien, vestibulum eget fermentum ac, volutpat a leo. Nulla pulvinar diam at enim auctor id tincidunt sem eleifend. Nam tristique lectus et eros euismod vel convallis metus varius. Phasellus feugiat arcu eu tortor congue dictum. Vestibulum hendrerit condimentum laoreet. Praesent mattis imperdiet justo, eu consequat dolor dignissim vel. Cras dapibus nisl in mi commodo et auctor nunc commodo.

Donec vitae pulvinar mi. Aenean consequat lacinia gravida. Sed pretium ligula facilisis nibh mattis interdum hendrerit sapien gravida. Etiam vel diam tortor. Quisque laoreet risus at quam venenatis et sollicitudin nunc volutpat. Pellentesque venenatis tristique sem, at mattis nibh tincidunt eu. Etiam et neque in ipsum pharetra gravida ornare vitae augue. Sed ut quam ac dolor tempus pellentesque.');

INSERT INTO news VALUES (NULL, 'Maecenas quis felis', 'Maecenas quis felis et tortor adipiscing blandit vel ac sem. Sed venenatis justo consequat libero sagittis laoreet. In ut odio a mi adipiscing egestas at sed orci. Nunc ac magna quam. Sed sit amet lectus urna, eget vestibulum purus. Maecenas rhoncus rutrum interdum. Sed ac dui odio, ac malesuada odio. Quisque lacinia faucibus tellus, in dignissim metus consequat vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce rutrum porttitor leo, nec viverra velit luctus vitae. Nullam bibendum tempor condimentum. Sed eget tellus non nibh viverra convallis vitae in tortor. Vivamus laoreet commodo orci quis feugiat. Praesent sodales tempus fermentum.', 'Maecenas quis felis et tortor adipiscing blandit vel ac sem. Sed venenatis justo consequat libero sagittis laoreet. In ut odio a mi adipiscing egestas at sed orci. Nunc ac magna quam. Sed sit amet lectus urna, eget vestibulum purus. Maecenas rhoncus rutrum interdum. Sed ac dui odio, ac malesuada odio. Quisque lacinia faucibus tellus, in dignissim metus consequat vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce rutrum porttitor leo, nec viverra velit luctus vitae. Nullam bibendum tempor condimentum. Sed eget tellus non nibh viverra convallis vitae in tortor. Vivamus laoreet commodo orci quis feugiat. Praesent sodales tempus fermentum.

Donec semper auctor leo sagittis viverra. Praesent lorem erat, ultricies varius pharetra ut, placerat vestibulum augue. Cras massa libero, dictum nec malesuada ut, blandit at dolor. Integer a justo nibh, ut consequat ligula. Maecenas ac odio in augue sollicitudin luctus vel a justo. Cras non enim sapien, fermentum euismod mi. Phasellus faucibus malesuada rutrum. Mauris sed metus eros, nec facilisis ante. Sed urna quam, auctor quis posuere at, dignissim ut sem. Donec in mi sem, quis fermentum mauris. Sed semper tellus non augue euismod imperdiet ut suscipit leo. Pellentesque lobortis egestas odio vel imperdiet.');

INSERT INTO news VALUES (NULL, 'In vulputate velit nunc', 'In vulputate velit nunc. Duis sollicitudin sapien at nulla pellentesque non consequat dolor convallis. Aenean egestas magna in urna malesuada id viverra erat vehicula. Integer eget lectus quam, et viverra urna. Aenean eu sem nibh, vel tempus nulla. Curabitur at turpis urna, ac tempor est. Integer lacinia arcu in odio blandit vitae ornare quam tempus. Fusce scelerisque, augue vitae porta posuere, mauris risus lacinia nisi, quis egestas arcu nisl id turpis. Duis fermentum, diam sed volutpat ornare, mauris ligula iaculis augue, at vehicula velit nisi a lorem. Suspendisse mattis arcu eu dolor venenatis cursus. Nulla facilisi. Cras magna augue, pretium non pulvinar commodo, rhoncus eu risus.', 'In vulputate velit nunc. Duis sollicitudin sapien at nulla pellentesque non consequat dolor convallis. Aenean egestas magna in urna malesuada id viverra erat vehicula. Integer eget lectus quam, et viverra urna. Aenean eu sem nibh, vel tempus nulla. Curabitur at turpis urna, ac tempor est. Integer lacinia arcu in odio blandit vitae ornare quam tempus. Fusce scelerisque, augue vitae porta posuere, mauris risus lacinia nisi, quis egestas arcu nisl id turpis. Duis fermentum, diam sed volutpat ornare, mauris ligula iaculis augue, at vehicula velit nisi a lorem. Suspendisse mattis arcu eu dolor venenatis cursus. Nulla facilisi. Cras magna augue, pretium non pulvinar commodo, rhoncus eu risus.

Donec magna massa, dictum eget tincidunt at, condimentum et ante. In eget ligula aliquam leo luctus auctor. Sed quis auctor leo. Aenean in massa mi. In turpis lorem, sagittis sit amet dictum semper, semper at nibh. Aliquam lacus enim, viverra id tempor id, posuere sed ipsum. Nam quam leo, sodales non rutrum ut, eleifend a odio. Nullam scelerisque ante tempor justo gravida porttitor. Pellentesque turpis eros, porta a euismod in, convallis quis sapien. In hac habitasse platea dictumst. Ut hendrerit auctor metus, sit amet imperdiet nunc porta et. Sed in aliquet lacus. Aliquam congue erat sed nibh iaculis eget vestibulum urna laoreet.');

INSERT INTO comments VALUES (NULL, 1, 'John Doe', 'Nullam ultrices magna quis magna laoreet fermentum.');
INSERT INTO comments VALUES (NULL, 1, 'Mary Doe', 'Phasellus risus nunc, pharetra non tincidunt sit amet, elementum sed lorem.');
INSERT INTO comments VALUES (NULL, 1, 'Carl Doe', 'Aenean non purus eget elit tristique consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl eros, malesuada et venenatis id, scelerisque ullamcorper nulla.');

INSERT INTO comments VALUES (NULL, 2, 'Mary Doe', 'Phasellus risus nunc, pharetra non tincidunt sit amet, elementum sed lorem.');
INSERT INTO comments VALUES (NULL, 2, 'Carl Doe', 'Aenean non purus eget elit tristique consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl eros, malesuada et venenatis id, scelerisque ullamcorper nulla.');

INSERT INTO users VALUES ('admin', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'); -- Password is tested hashed with SHA 1
