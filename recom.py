import pandas as pd
import numpy as np

from sklearn.feature_extraction.text import CountVectorizer
from sklearn.metrics.pairwise import cosine_similarity

def get_title_from_index(index):
	return df[df.index == index]["title"].values[0]

def get_index_from_title(title):
	return df[df.title == title]["index"].values[0]

df = pd.read_csv("C:/wamp64/www/userregistration/final.csv")

features = ['keywords','category']

for feature in features:
	df[feature] = df[feature].fillna('')

def combine_features(row):
	try:
		return row['keywords']+" "+row["category"]
	except:
		print("Error:",row)

df["combined_features"]	= df.apply(combine_features,axis=1)
cv = CountVectorizer()

count_matrix = cv.fit_transform(df["combined_features"])

cosine_sim = cosine_similarity(count_matrix)
new_user_likes = "football"

final_index = get_index_from_title(new_user_likes)

similar_projects = list(enumerate(cosine_sim[final_index]))

sorted_similar_projects = sorted(similar_projects,key=lambda x:x[1],reverse=True )

print("the recommended projects are:")
i=0
for project in sorted_similar_projects:
	print(get_title_from_index(project[0]))
	i=i+1
	if i>5:
		break
