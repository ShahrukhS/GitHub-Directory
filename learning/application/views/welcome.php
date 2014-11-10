<form method="form" action="#">
<select data-placeholder="Select category" data-val="true" data-val-required="The Category field is required." id="SelectedCategory" name="SelectedCategory"><option value=""></option>
<option value="6c432470-2c72-43ea-ac66-ef63c16402b9">Arts/Crafts</option>
<option value="d9d541e5-ae59-4ef9-bcea-9d32c010e41b">Associations</option>
<option value="2963c03e-2c46-461b-8b36-a46a476524fc">Automotive</option>
<option value="31516cbb-560e-4355-8d5c-ef9bedf6d182">Banks</option>
<option value="db74ac10-78c3-4dba-b035-35b1af6e1ec9">Bars</option>
<option value="ff877326-3a28-4601-9025-58d2f05e2172">Charitable Organizations</option>
<option value="9037df20-4e92-4928-9263-b727b31243a3">Clubs</option>
<option value="ca8a34c2-27ea-4d20-b2ae-7b4235e5bd54">Entertainment/Bands</option>
<option value="7eea044a-f0e6-474c-99bd-aa70ba0ca592">Events/Festivals</option>
<option value="cc10cf17-d6cb-40f1-b91a-b0014efd78bf">Fitness</option>
<option value="1437b8cf-4e49-4943-9ae6-cf0be867c22b">Food Trucks</option>
<option value="f6f28e8e-42eb-46ab-8943-97fbf109704c">Funeral Homes/Monuments</option>
<option value="48e4deaa-cdd4-41f3-86ce-b8e0f789d867">Government</option>
<option value="605b6d41-c8b3-4187-b7e0-28859512a11e">Health/Beauty/Wellness</option>
<option value="8fe8faa4-500c-4eba-889f-1756aa99a8ef">Historic/Tourism</option>
<option value="0f19eb4d-b8c7-4bd3-a09a-5e116048c2c8">Home Services</option>
<option value="806be520-28ee-41ad-aa3a-300eeb52cab8">Hotels/B&amp;Bs</option>
<option value="1e2df6e3-9643-4a73-b531-c87e994c4fb8">Legal</option>
<option value="3cbd42e7-ebe9-4411-932a-526fde77a65b">Medical/Dental</option>
<option value="62cb1246-b0ac-40ef-919c-eaa8a519aecb">Miscellaneous</option>
<option value="20550275-c951-4f98-acd2-8cbf85e89bd9">News/Publications</option>
<option value="4bcc4347-45c1-44b7-95fc-ffddd43e6f2d">Pet Care</option>
<option value="aa8afb08-b509-4103-9cd1-96e5d619cefe">Politics</option>
<option value="d943aada-833d-4507-9383-a6fd5d01039e">Professional</option>
<option value="02de73ad-428a-4f60-ba4e-37a9e598e928">Real Estate</option>
<option value="69a2d8a8-f9ba-4286-ae0b-a46ee9a5d22a">Religious</option>
<option value="0d943ecf-34ef-4ccc-be86-31552dc484de">Restaurants</option>
<option value="64c338ae-f3f9-4cfd-ba71-c867e73fd8b4">Retail</option>
<option value="68712b02-a2a6-4ecc-a89d-1ca6b23fb91e">Schools</option>
<option value="09a48cf3-4c29-406c-bece-8a54da5c92cc">Sports/Teams</option>
<option value="0db27434-b034-4a3d-8ef4-79cdedc3e2fe">Technology</option>
<option value="6be09b28-e1f5-4163-be04-2dc516bed664">TV/Radio</option>
</select>
					<?php
					$attributes = array(
						'data-placeholder'	=>	'Select category',
						'data-val'	=>	'true',
						'data-val-required'	=>	'The Category field is required.',
						'id'	=>	'SelectedCategory',
						'name'	=>	'SelectedCategory'
					);
					$categories = array(
					  'small'  => 'Small Shirt',
					  'med'    => 'Medium Shirt',
					  'large'  => 'Large Shirt',
					  'xlarge' => 'Extra Large Shirt',
					);
					echo form_dropdown('Shirts', $categories);
					?>
<input type="submit" value="Submit" />
</form>