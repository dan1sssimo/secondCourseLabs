using System;
using System.Collections.Generic;
using System.Linq;
using System.Windows.Forms;



namespace lab2
{
    public partial class Form1 : Form
    {

        Set setA;
        Set setB;

        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

            dataGridViewSetsRelations.RowHeadersWidth = 60;

        }
        

        private void Culculate(string set1, string set2)
        {
            clearDataGridViewSetsRelations();
            try
            {
                this.setA = new Set(set1);
                this.setB = new Set(set2);

                foreach (var elem in setB.Values)
                    dataGridViewSetsRelations.Columns.Add(elem.ToString(), elem.ToString());

                for (int i = 0; i < setA.Values.Count; i++)
                {
                    dataGridViewSetsRelations.Rows.Add();
                    dataGridViewSetsRelations.Rows[i].HeaderCell.Value = setA.Values[i].ToString();
                }

                for (int i = 0; i < setA.Values.Count; i++)
                    for (int j = 0; j < setB.Values.Count; j++)
                    {
                        if ((setA.Values[i] + setB.Values[j]) % 5 == 0)
                            dataGridViewSetsRelations[j, i].Value = 1;
                        else
                            dataGridViewSetsRelations[j, i].Value = 0;
                    }
            }
            catch
            {
                clearDataGridViewSetsRelations();
            }

        }

        private void clearDataGridViewSetsRelations()
        {
            dataGridViewSetsRelations.Rows.Clear();
            dataGridViewSetsRelations.Columns.Clear();
        }


        public class Set
        {
            public List<double> Values { get; set; }

            public Set(IEnumerable<double> Value)
            {
                this.Values = Value.ToList();
            }

            public Set(string set)
            {
                try
                {
                    this.Values = set.Split(',').Select(double.Parse).ToList();
                }
                catch
                {
                    this.Values = new List<double>();
                }
            }

            public Set(params double[] Values)
            {
                this.Values = Values.ToList();
            }

            public Set Union(Set set)
            {
                var unionValues = Values.Union(set.Values).ToList();
                unionValues.Sort();
                return new Set(unionValues);
            }

            public Set Intersect(Set set)
            {
                var intersectValues = Values.Intersect(set.Values).ToList();
                intersectValues.Sort();
                return new Set(intersectValues);
            }

            public Set Differance(Set set)
            {
                var exceptValues = Values.Except(set.Values).ToList();
                exceptValues.Sort();
                return new Set(exceptValues);
            }

            public Set SymmetricDifference(Set set)
            {
                var symmetricDifferenceValues = this.Union(set).Values.Except(this.Intersect(set).Values).ToList();
                symmetricDifferenceValues.Sort();
                return new Set(symmetricDifferenceValues);
            }

            public override string ToString()
            {
                return string.Join(" ,", Values);
            }


        }

        private void button1_Click(object sender, EventArgs e)
        {
            Culculate(textBoxA.Text, textBoxB.Text);
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void textBoxB_TextChanged(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void textBoxA_TextChanged(object sender, EventArgs e)
        {

        }
    }
}
