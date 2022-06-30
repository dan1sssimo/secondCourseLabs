using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;



namespace WinFormsApp1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
        public const int Unation = 0, 
            Intersection = 1,
            Difference = 2, 
            SymetricDifference = 3;
        public static int obrahunok;
        private void button1_Click(object sender, EventArgs e)
        {
            obrahunok = Unation;
            label1.Text = Solve(textBoxA.Text, textBoxB.Text);
            pictureBox.Image = new Bitmap("C:/Users/danil/source/repos/WinFormsApp1/WinFormsApp1/image/one.png");
        }

        private void button2_Click(object sender, EventArgs e)
        {
            obrahunok = Intersection;
            label1.Text = Solve(textBoxA.Text, textBoxB.Text);
            pictureBox.Image = new Bitmap("C:/Users/danil/source/repos/WinFormsApp1/WinFormsApp1/image/two.png");

        }
        private void button3_Click(object sender, EventArgs e)
        {
            obrahunok = Difference;
            label1.Text = Solve(textBoxA.Text, textBoxB.Text);
            pictureBox.Image = new Bitmap("C:/Users/danil/source/repos/WinFormsApp1/WinFormsApp1/image/tree.png");
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void button4_Click(object sender, EventArgs e)
        {
            obrahunok = SymetricDifference;
            label1.Text = Solve(textBoxA.Text, textBoxB.Text);
            pictureBox.Image = new Bitmap("C:/Users/danil/source/repos/WinFormsApp1/WinFormsApp1/image/four.png");
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }
        public static string Solve(String textboxa, String textboxb)
        {
            List<int> A = new List<int> { };
            List<int> B = new List<int> { };
            List<int> union = new List<int> { };
            List<int> tmpB = new List<int> { };
            string[] textA = textboxa.Split(',');
            string[] textB = textboxb.Split(',');
            foreach (var texta in textA)
            {
                A.Add(int.Parse(texta));
            }
            foreach (var texb in textB)
            {
                B.Add(int.Parse(texb));
            }
            int tmp = -1;
            string label = "";
            switch (obrahunok)
            {
                case Unation:
                    label = "A ∪ B = ";
                    union = A;
                    tmpB = B;
                    foreach (var a in union)
                    {
                        tmp = tmpB.BinarySearch(a);
                        if (tmp >= 0)
                            tmpB.RemoveAt(tmp);
                    }
                    foreach (var b in tmpB)
                        union.Add(b);
                    union.Sort();
                    break;
                case Intersection:
                    label = "A ∩ B = ";
                    for (int i = 0; i < A.Count; i++)
                        for (int j = 0; j < B.Count; j++)
                            if (A[i] == B[j])
                                union.Add(A[i]);
                    break;
                case Difference:
                    label = "A / B = ";
                    union = A;
                    for (int i = 0; i < union.Count; i++)
                        for (int j = 0; j < B.Count; j++)
                            if (A[i] == B[j])
                            {
                                union.RemoveAt(union.BinarySearch(B[j]));
                                i--;
                                break;
                            }
                    break;
                case SymetricDifference:
                    label = "A Δ B = ";
                    union = A;
                    tmpB = B;
                    int tmpCount = B.Count;
                    for (int i = 0; i < union.Count; i++)
                        for (int j = 0; j < tmpCount; j++)
                            if (union[i] == tmpB[j])
                            {
                                union.RemoveAt(union.BinarySearch(tmpB[j]));
                                tmpB.RemoveAt(j);
                                j--;
                                i--;
                                tmpCount = tmpB.Count;
                                break;
                            }
                    for (int i = 0; i < tmpB.Count; i++)
                        union.Add(tmpB[i]);
                    union.Sort();
                    break;
                default:
                    break;
            }
            label += "{ ";
            for (int i = 0; i < union.Count; i++)
            {
                label = label + union[i];
                if (i + 1 != union.Count)
                    label = label + ", ";
            }
            label += " }";
            return label;
        }

    }
}