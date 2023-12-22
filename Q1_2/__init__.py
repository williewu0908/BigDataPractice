import pandas as pd
df = pd.read_csv("../edu_bigdata_imp1.csv", encoding='big5', low_memory=False)

stu39 = df[df["PseudoID"] ==39].dropna(subset=['dp001_question_sn'])
question = stu39["dp001_question_sn"].unique()
print(len(question))