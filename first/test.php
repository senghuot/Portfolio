<?php 
					foreach(glob("tmnt/review*.txt") as $review){
						$counter = 1;
						if($counter % 2 == 1 ){
							$review_line = file_get_contents($review);
							$review_detail = explode("\n", $review_line );

							print $review_detail[0];
				
						}
						$counter++;
					}
				?>